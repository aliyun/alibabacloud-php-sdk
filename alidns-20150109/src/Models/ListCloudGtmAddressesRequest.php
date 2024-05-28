<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ListCloudGtmAddressesRequest extends Model
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
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

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
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $monitorTemplateId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

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
     * @example IPv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'address'           => 'Address',
        'addressId'         => 'AddressId',
        'clientToken'       => 'ClientToken',
        'enableStatus'      => 'EnableStatus',
        'healthStatus'      => 'HealthStatus',
        'monitorTemplateId' => 'MonitorTemplateId',
        'name'              => 'Name',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'type'              => 'Type',
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
