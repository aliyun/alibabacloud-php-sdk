<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dataSetVersion;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'status'         => 'Status',
        'type'           => 'Type',
        'commodityCode'  => 'CommodityCode',
        'chargeType'     => 'ChargeType',
        'instanceId'     => 'InstanceId',
        'gmtModified'    => 'GmtModified',
        'lockMode'       => 'LockMode',
        'regionId'       => 'RegionId',
        'dataSetVersion' => 'DataSetVersion',
        'industry'       => 'Industry',
        'expiredTime'    => 'ExpiredTime',
        'gmtCreate'      => 'GmtCreate',
        'name'           => 'Name',
        'scene'          => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dataSetVersion) {
            $res['DataSetVersion'] = $this->dataSetVersion;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DataSetVersion'])) {
            $model->dataSetVersion = $map['DataSetVersion'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
