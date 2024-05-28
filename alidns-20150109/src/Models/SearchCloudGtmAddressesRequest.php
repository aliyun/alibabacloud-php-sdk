<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SearchCloudGtmAddressesRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example Ping-IPv4
     *
     * @var string
     */
    public $monitorTemplateName;

    /**
     * @example or
     *
     * @var string
     */
    public $nameSearchCondition;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example or
     *
     * @var string
     */
    public $remarkSearchCondition;

    /**
     * @var string[]
     */
    public $remarks;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'addressId'             => 'AddressId',
        'availableStatus'       => 'AvailableStatus',
        'enableStatus'          => 'EnableStatus',
        'healthStatus'          => 'HealthStatus',
        'monitorTemplateName'   => 'MonitorTemplateName',
        'nameSearchCondition'   => 'NameSearchCondition',
        'names'                 => 'Names',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'remarkSearchCondition' => 'RemarkSearchCondition',
        'remarks'               => 'Remarks',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->monitorTemplateName) {
            $res['MonitorTemplateName'] = $this->monitorTemplateName;
        }
        if (null !== $this->nameSearchCondition) {
            $res['NameSearchCondition'] = $this->nameSearchCondition;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remarkSearchCondition) {
            $res['RemarkSearchCondition'] = $this->remarkSearchCondition;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCloudGtmAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['MonitorTemplateName'])) {
            $model->monitorTemplateName = $map['MonitorTemplateName'];
        }
        if (isset($map['NameSearchCondition'])) {
            $model->nameSearchCondition = $map['NameSearchCondition'];
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemarkSearchCondition'])) {
            $model->remarkSearchCondition = $map['RemarkSearchCondition'];
        }
        if (isset($map['Remarks'])) {
            if (!empty($map['Remarks'])) {
                $model->remarks = $map['Remarks'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
