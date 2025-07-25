<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SearchCloudGtmAddressesRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US (default): English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Query by service address with precise conditions, supporting IP addresses or domain names.
     *
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The address ID. This ID uniquely identifies the address.
     *
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @description Search by address availability status with precise conditions:
     * - available
     * - unavailable
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description Query by exact address enable status:
     * - enable: enabled status
     * - disable: disabled status
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The health state of the addresses that you want to query. Valid values:
     *
     *   ok: The addresses pass all health checks of the referenced health check templates.
     *   ok_alert: The addresses fail some health checks of the referenced health check templates, but the addresses are deemed available.
     *   ok_no_monitor: The addresses do not reference any health check template.
     *   exceptional: The addresses fail some or all health checks of the referenced health check templates, and the addresses are deemed unavailable.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description Health check template name.
     *
     * @example Ping-IPv4
     *
     * @var string
     */
    public $monitorTemplateName;

    /**
     * @description The logical condition for querying addresses by name. This parameter is required if you want to query addresses by name. Valid values:
     *
     *   and: displays the results that match all search conditions.
     *   or: displays the results that match some or all search conditions.
     *
     * @example or
     *
     * @var string
     */
    public $nameSearchCondition;

    /**
     * @description Address name, usually for users to distinguish between different addresses.
     *
     * @var string[]
     */
    public $names;

    /**
     * @description Current page number, starting from 1, default is 1.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows per page when paginating queries, with a maximum value of 100 and a default of 20.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The logical condition for querying addresses by additional description. This parameter is required if you want to query addresses by additional description. Valid values:
     *
     * and: displays the results that match all search conditions.
     *
     * or: displays the results that match some or all search conditions.
     *
     * @example or
     *
     * @var string
     */
    public $remarkSearchCondition;

    /**
     * @description Remarks for the address.
     *
     * @var string[]
     */
    public $remarks;

    /**
     * @description Search precisely by address type conditions:
     * - IPv4
     * - IPv6
     * - domain
     *
     * @example IPv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'address' => 'Address',
        'addressId' => 'AddressId',
        'availableStatus' => 'AvailableStatus',
        'enableStatus' => 'EnableStatus',
        'healthStatus' => 'HealthStatus',
        'monitorTemplateName' => 'MonitorTemplateName',
        'nameSearchCondition' => 'NameSearchCondition',
        'names' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'remarkSearchCondition' => 'RemarkSearchCondition',
        'remarks' => 'Remarks',
        'type' => 'Type',
    ];

    public function validate() {}

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
