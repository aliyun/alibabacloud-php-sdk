<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ModifyInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example airecpre
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 20181206170353
     *
     * @var string
     */
    public $dataSetVersion;

    /**
     * @example 2019-01-06T16:00:00.000Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 2018-12-06T06:14:01.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2018-12-06T11:17:49.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example news
     *
     * @var string
     */
    public $industry;

    /**
     * @example airec-cn-o400whm78004
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Standard
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'     => 'chargeType',
        'commodityCode'  => 'commodityCode',
        'dataSetVersion' => 'dataSetVersion',
        'expiredTime'    => 'expiredTime',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'industry'       => 'industry',
        'instanceId'     => 'instanceId',
        'lockMode'       => 'lockMode',
        'name'           => 'name',
        'regionId'       => 'regionId',
        'status'         => 'status',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->dataSetVersion) {
            $res['dataSetVersion'] = $this->dataSetVersion;
        }
        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['dataSetVersion'])) {
            $model->dataSetVersion = $map['dataSetVersion'];
        }
        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
