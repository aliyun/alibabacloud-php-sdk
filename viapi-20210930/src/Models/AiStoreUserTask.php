<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class AiStoreUserTask extends Model
{
    /**
     * @var string
     */
    public $apiDesc;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bucketKeyPrefix;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $disableTime;

    /**
     * @var string
     */
    public $enableTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paramInfo;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productDesc;

    /**
     * @var string
     */
    public $receiveConfig;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionDesc;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskVersion;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiDesc'         => 'ApiDesc',
        'apiName'         => 'ApiName',
        'bucketKeyPrefix' => 'BucketKeyPrefix',
        'bucketName'      => 'BucketName',
        'disableTime'     => 'DisableTime',
        'enableTime'      => 'EnableTime',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'name'            => 'Name',
        'paramInfo'       => 'ParamInfo',
        'product'         => 'Product',
        'productDesc'     => 'ProductDesc',
        'receiveConfig'   => 'ReceiveConfig',
        'region'          => 'Region',
        'regionDesc'      => 'RegionDesc',
        'remark'          => 'Remark',
        'status'          => 'Status',
        'taskVersion'     => 'TaskVersion',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDesc) {
            $res['ApiDesc'] = $this->apiDesc;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->bucketKeyPrefix) {
            $res['BucketKeyPrefix'] = $this->bucketKeyPrefix;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->disableTime) {
            $res['DisableTime'] = $this->disableTime;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramInfo) {
            $res['ParamInfo'] = $this->paramInfo;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }
        if (null !== $this->receiveConfig) {
            $res['ReceiveConfig'] = $this->receiveConfig;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionDesc) {
            $res['RegionDesc'] = $this->regionDesc;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskVersion) {
            $res['TaskVersion'] = $this->taskVersion;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ApiDesc'])) {
            $model->apiDesc = $map['ApiDesc'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BucketKeyPrefix'])) {
            $model->bucketKeyPrefix = $map['BucketKeyPrefix'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['DisableTime'])) {
            $model->disableTime = $map['DisableTime'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamInfo'])) {
            $model->paramInfo = $map['ParamInfo'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }
        if (isset($map['ReceiveConfig'])) {
            $model->receiveConfig = $map['ReceiveConfig'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionDesc'])) {
            $model->regionDesc = $map['RegionDesc'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskVersion'])) {
            $model->taskVersion = $map['TaskVersion'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
