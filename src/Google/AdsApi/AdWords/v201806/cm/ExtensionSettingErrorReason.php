<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExtensionSettingErrorReason
{
    const EXTENSIONS_REQUIRED = 'EXTENSIONS_REQUIRED';
    const FEED_TYPE_EXTENSION_TYPE_MISMATCH = 'FEED_TYPE_EXTENSION_TYPE_MISMATCH';
    const INVALID_FEED_TYPE = 'INVALID_FEED_TYPE';
    const INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING = 'INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING';
    const CANNOT_CHANGE_FEED_ITEM_ON_ADD = 'CANNOT_CHANGE_FEED_ITEM_ON_ADD';
    const CANNOT_UPDATE_NEWLY_ADDED_EXTENSION = 'CANNOT_UPDATE_NEWLY_ADDED_EXTENSION';
    const NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE';
    const NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE';
    const NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE';
    const AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS = 'AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS';
    const CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS = 'CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS';
    const CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS = 'CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS';
    const AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
    const CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
    const CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
    const VALUE_OUT_OF_RANGE = 'VALUE_OUT_OF_RANGE';
    const CANNOT_SET_WITH_FINAL_URLS = 'CANNOT_SET_WITH_FINAL_URLS';
    const CANNOT_SET_WITHOUT_FINAL_URLS = 'CANNOT_SET_WITHOUT_FINAL_URLS';
    const CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE = 'CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE';
    const INVALID_PHONE_NUMBER = 'INVALID_PHONE_NUMBER';
    const PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
    const CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
    const PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'PREMIUM_RATE_NUMBER_NOT_ALLOWED';
    const DISALLOWED_NUMBER_TYPE = 'DISALLOWED_NUMBER_TYPE';
    const INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT';
    const VANITY_PHONE_NUMBER_NOT_ALLOWED = 'VANITY_PHONE_NUMBER_NOT_ALLOWED';
    const INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
    const INVALID_CALL_CONVERSION_TYPE_ID = 'INVALID_CALL_CONVERSION_TYPE_ID';
    const CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING = 'CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING';
    const CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
    const INVALID_APP_ID = 'INVALID_APP_ID';
    const QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET';
    const HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET';
    const REVIEW_EXTENSION_SOURCE_INELIGIBLE = 'REVIEW_EXTENSION_SOURCE_INELIGIBLE';
    const SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT';
    const MISSING_FIELD = 'MISSING_FIELD';
    const INCONSISTENT_CURRENCY_CODES = 'INCONSISTENT_CURRENCY_CODES';
    const PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS';
    const PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 'PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION';
    const PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS';
    const PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 'PRICE_EXTENSION_HAS_TOO_MANY_ITEMS';
    const UNSUPPORTED_VALUE = 'UNSUPPORTED_VALUE';
    const UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE = 'UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE';
    const INVALID_DEVICE_PREFERENCE = 'INVALID_DEVICE_PREFERENCE';
    const INVALID_SCHEDULE_END = 'INVALID_SCHEDULE_END';
    const DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE';
    const OVERLAPPING_SCHEDULES = 'OVERLAPPING_SCHEDULES';
    const SCHEDULE_END_NOT_AFTER_START = 'SCHEDULE_END_NOT_AFTER_START';
    const TOO_MANY_SCHEDULES_PER_DAY = 'TOO_MANY_SCHEDULES_PER_DAY';
    const DUPLICATE_EXTENSION_FEED_ITEM_EDIT = 'DUPLICATE_EXTENSION_FEED_ITEM_EDIT';
    const INVALID_SNIPPETS_HEADER = 'INVALID_SNIPPETS_HEADER';
    const PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY';
    const CAMPAIGN_TARGETING_MISMATCH = 'CAMPAIGN_TARGETING_MISMATCH';
    const CANNOT_OPERATE_ON_DELETED_FEED = 'CANNOT_OPERATE_ON_DELETED_FEED';
    const CONCRETE_EXTENSION_TYPE_REQUIRED = 'CONCRETE_EXTENSION_TYPE_REQUIRED';
    const INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION = 'INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION';
    const START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
    const INVALID_PRICE_FORMAT = 'INVALID_PRICE_FORMAT';
    const PROMOTION_INVALID_TIME = 'PROMOTION_INVALID_TIME';
    const PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF = 'PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF';
    const PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT';
    const TOO_MANY_DECIMAL_PLACES_SPECIFIED = 'TOO_MANY_DECIMAL_PLACES_SPECIFIED';
    const INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
    const UNSUPPORTED_LANGUAGE = 'UNSUPPORTED_LANGUAGE';
    const UNKNOWN = 'UNKNOWN';


}
