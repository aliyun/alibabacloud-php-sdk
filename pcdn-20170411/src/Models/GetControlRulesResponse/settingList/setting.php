<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponse\settingList;

use AlibabaCloud\Tea\Model;

class setting extends Model
{
    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $marketType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $onoff;

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
    public $resourceId;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'platformType' => 'PlatformType',
        'appVersion'   => 'AppVersion',
        'ispName'      => 'IspName',
        'businessType' => 'BusinessType',
        'clientId'     => 'ClientId',
        'createdAt'    => 'CreatedAt',
        'marketType'   => 'MarketType',
        'name'         => 'Name',
        'onoff'        => 'Onoff',
        'usable'       => 'Usable',
        'region'       => 'Region',
        'resourceId'   => 'ResourceId',
        'updatedAt'    => 'UpdatedAt',
    ];

    public function validate()
    {
        Model::validateRequired('platformType', $this->platformType, true);
        Model::validateRequired('appVersion', $this->appVersion, true);
        Model::validateRequired('ispName', $this->ispName, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('marketType', $this->marketType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('onoff', $this->onoff, true);
        Model::validateRequired('usable', $this->usable, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->marketType) {
            $res['MarketType'] = $this->marketType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->onoff) {
            $res['Onoff'] = $this->onoff;
        }
        if (null !== $this->usable) {
            $res['Usable'] = $this->usable;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['MarketType'])) {
            $model->marketType = $map['MarketType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Onoff'])) {
            $model->onoff = $map['Onoff'];
        }
        if (isset($map['Usable'])) {
            $model->usable = $map['Usable'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
