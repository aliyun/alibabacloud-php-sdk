<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CountJobByConditionRequest extends Model
{
    /**
     * @description 目标端数据库类型
     *
     * @var string
     */
    public $destDbType;

    /**
     * @description 父任务id
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @description 查询的值，与Type对应
     *
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 源端数据库类型
     *
     * @var string
     */
    public $srcDbType;

    /**
     * @var string
     */
    public $status;

    /**
     * @description 查询类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'destDbType' => 'DestDbType',
        'groupId'    => 'GroupId',
        'jobType'    => 'JobType',
        'params'     => 'Params',
        'region'     => 'Region',
        'regionId'   => 'RegionId',
        'srcDbType'  => 'SrcDbType',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destDbType) {
            $res['DestDbType'] = $this->destDbType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcDbType) {
            $res['SrcDbType'] = $this->srcDbType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountJobByConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestDbType'])) {
            $model->destDbType = $map['DestDbType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcDbType'])) {
            $model->srcDbType = $map['SrcDbType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
