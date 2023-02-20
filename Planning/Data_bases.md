# Planning for database layout

## tables
    - login details
    - advert reference
    - advert data (clicks per day)
    - advert user link
        - tbl_placers
    - advertisers
    - advertisers placements

### Login details (tbl_user_details) (done)
    - user_id
    - name
    - email
    - cell
    - advertiser (bool)
    - date of birth (DOB)
    - date_started

### Advert References (tbl_ad_ref) (done)
    - advert_id
    - name
    - ad_API_details
    - total_clicks
    - ad_age
    - ad_active

### Advert data (tbl_ad_data) (done)
    - advert_id
    - date
    - clicks/date

### advertisers (tbl_placers) (done)
    - user_id
    - num_ads_placed
    - clicks_overall
    - num_applications

## advertisers placements (tbl_advert_placed_by) (done)
    - user_id
    - advert_id
    - date_placed

