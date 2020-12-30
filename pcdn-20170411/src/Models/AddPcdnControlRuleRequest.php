<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class AddPcdnControlRuleRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $market;

    /**
     * @var string
     */
    public $appVersion;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'version'       => 'Version',
        'name'          => 'Name',
        'region'        => 'Region',
        'ispName'       => 'IspName',
        'platformType'  => 'PlatformType',
        'businessType'  => 'BusinessType',
        'market'        => 'Market',
        'appVersion'    => 'AppVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->market) {
            $res['Market'] = $this->market;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPcdnControlRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Market'])) {
            $model->market = $map['Market'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        return $model;
    }
}
