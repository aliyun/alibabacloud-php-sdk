<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody\settingList;

use AlibabaCloud\Tea\Model;

class setting extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var bool
     */
    public $usable;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $marketType;

    /**
     * @var bool
     */
    public $onoff;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'createdAt'    => 'CreatedAt',
        'clientId'     => 'ClientId',
        'businessType' => 'BusinessType',
        'usable'       => 'Usable',
        'region'       => 'Region',
        'platformType' => 'PlatformType',
        'marketType'   => 'MarketType',
        'onoff'        => 'Onoff',
        'ispName'      => 'IspName',
        'appVersion'   => 'AppVersion',
        'updatedAt'    => 'UpdatedAt',
        'name'         => 'Name',
        'resourceId'   => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->usable) {
            $res['Usable'] = $this->usable;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->marketType) {
            $res['MarketType'] = $this->marketType;
        }
        if (null !== $this->onoff) {
            $res['Onoff'] = $this->onoff;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return setting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Usable'])) {
            $model->usable = $map['Usable'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['MarketType'])) {
            $model->marketType = $map['MarketType'];
        }
        if (isset($map['Onoff'])) {
            $model->onoff = $map['Onoff'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
