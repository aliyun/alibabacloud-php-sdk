<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class AiStoreUserTask extends Model
{
    /**
     * @description ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description 地域
     *
     * @var string
     */
    public $region;

    /**
     * @description 地域描述
     *
     * @var string
     */
    public $regionDesc;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 产品名称
     *
     * @var string
     */
    public $product;

    /**
     * @description 产品描述
     *
     * @var string
     */
    public $productDesc;

    /**
     * @description API名称
     *
     * @var string
     */
    public $apiName;

    /**
     * @description API描述
     *
     * @var string
     */
    public $apiDesc;

    /**
     * @description API版本
     *
     * @var string
     */
    public $version;

    /**
     * @description 参数信息
     *
     * @var string
     */
    public $paramInfo;

    /**
     * @description bucket名称
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description bucketKey前缀
     *
     * @var string
     */
    public $bucketKeyPrefix;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 接收消息配置
     *
     * @var string
     */
    public $receiveConfig;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 启用时间
     *
     * @var string
     */
    public $enableTime;

    /**
     * @description 停用时间
     *
     * @var string
     */
    public $disableTime;
    protected $_name = [
        'id'              => 'Id',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'region'          => 'Region',
        'regionDesc'      => 'RegionDesc',
        'name'            => 'Name',
        'product'         => 'Product',
        'productDesc'     => 'ProductDesc',
        'apiName'         => 'ApiName',
        'apiDesc'         => 'ApiDesc',
        'version'         => 'Version',
        'paramInfo'       => 'ParamInfo',
        'bucketName'      => 'BucketName',
        'bucketKeyPrefix' => 'BucketKeyPrefix',
        'remark'          => 'Remark',
        'receiveConfig'   => 'ReceiveConfig',
        'status'          => 'Status',
        'enableTime'      => 'EnableTime',
        'disableTime'     => 'DisableTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionDesc) {
            $res['RegionDesc'] = $this->regionDesc;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiDesc) {
            $res['ApiDesc'] = $this->apiDesc;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->paramInfo) {
            $res['ParamInfo'] = $this->paramInfo;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketKeyPrefix) {
            $res['BucketKeyPrefix'] = $this->bucketKeyPrefix;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->receiveConfig) {
            $res['ReceiveConfig'] = $this->receiveConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->disableTime) {
            $res['DisableTime'] = $this->disableTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiStoreUserTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionDesc'])) {
            $model->regionDesc = $map['RegionDesc'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiDesc'])) {
            $model->apiDesc = $map['ApiDesc'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ParamInfo'])) {
            $model->paramInfo = $map['ParamInfo'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketKeyPrefix'])) {
            $model->bucketKeyPrefix = $map['BucketKeyPrefix'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ReceiveConfig'])) {
            $model->receiveConfig = $map['ReceiveConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['DisableTime'])) {
            $model->disableTime = $map['DisableTime'];
        }

        return $model;
    }
}
