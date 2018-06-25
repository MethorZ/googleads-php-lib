<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\Dfp\\v201805\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\Dfp\\v201805\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201805\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\Dfp\\v201805\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201805\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201805\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\Dfp\\v201805\\ResultSet',
      'Row' => 'Google\\AdsApi\\Dfp\\v201805\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\Dfp\\v201805\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\Dfp\\v201805\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/PublisherQueryLanguageService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Retrieves rows of data that satisfy the given {@link Statement#query} from
     * the system.
     *
     * specify what data needs to returned
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $selectStatement
     * @return \Google\AdsApi\Dfp\v201805\ResultSet
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function select(\Google\AdsApi\Dfp\v201805\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
