<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ListCloudGtmAddressesRequest extends Model
{
    /**
     * @description Return language value, options:
     * - zh-CN: Chinese.
     * - en-US: English.
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description IP address or domain name.
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
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Indicates the current availability of the address:
     * - enable: Enabled status
     * - disable: Disabled status
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The health check state of the address. Valid values:
     *
     *   ok: The address passes all health checks of the referenced health check templates.
     *   ok_alert: The address fails some health checks of the referenced health check templates but the address is deemed normal.
     *   ok_no_monitor: The address does not reference a health check template.
     *   exceptional: The address fails some or all health checks of the referenced health check templates and the address is deemed abnormal.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the health check template. This ID uniquely identifies the health check template.
     *
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $monitorTemplateId;

    /**
     * @description Address name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Current page number, starting from **1**, default is **1**.
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
     * @description Address type:
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
        'clientToken' => 'ClientToken',
        'enableStatus' => 'EnableStatus',
        'healthStatus' => 'HealthStatus',
        'monitorTemplateId' => 'MonitorTemplateId',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->monitorTemplateId) {
            $res['MonitorTemplateId'] = $this->monitorTemplateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmAddressesRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['MonitorTemplateId'])) {
            $model->monitorTemplateId = $map['MonitorTemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
