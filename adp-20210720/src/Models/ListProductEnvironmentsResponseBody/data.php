<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $envUID;

    /**
     * @example 实例状态
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $oldProductVersion;

    /**
     * @var string
     */
    public $oldProductVersionUID;

    /**
     * @var string
     */
    public $platformStatus;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productUID;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $vendorConfig;

    /**
     * @example 环境类型
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'envName'              => 'envName',
        'envType'              => 'envType',
        'envUID'               => 'envUID',
        'instanceStatus'       => 'instanceStatus',
        'oldProductVersion'    => 'oldProductVersion',
        'oldProductVersionUID' => 'oldProductVersionUID',
        'platformStatus'       => 'platformStatus',
        'productName'          => 'productName',
        'productUID'           => 'productUID',
        'productVersion'       => 'productVersion',
        'productVersionUID'    => 'productVersionUID',
        'provider'             => 'provider',
        'uid'                  => 'uid',
        'vendorConfig'         => 'vendorConfig',
        'vendorType'           => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envName) {
            $res['envName'] = $this->envName;
        }
        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->oldProductVersion) {
            $res['oldProductVersion'] = $this->oldProductVersion;
        }
        if (null !== $this->oldProductVersionUID) {
            $res['oldProductVersionUID'] = $this->oldProductVersionUID;
        }
        if (null !== $this->platformStatus) {
            $res['platformStatus'] = $this->platformStatus;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productUID) {
            $res['productUID'] = $this->productUID;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->vendorConfig) {
            $res['vendorConfig'] = $this->vendorConfig;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['envName'])) {
            $model->envName = $map['envName'];
        }
        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }
        if (isset($map['oldProductVersion'])) {
            $model->oldProductVersion = $map['oldProductVersion'];
        }
        if (isset($map['oldProductVersionUID'])) {
            $model->oldProductVersionUID = $map['oldProductVersionUID'];
        }
        if (isset($map['platformStatus'])) {
            $model->platformStatus = $map['platformStatus'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productUID'])) {
            $model->productUID = $map['productUID'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['vendorConfig'])) {
            $model->vendorConfig = $map['vendorConfig'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
