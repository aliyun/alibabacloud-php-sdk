<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description APP编号
     *
     * @var string
     */
    public $appCode;

    /**
     * @description APP名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 产品失效时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceMemo;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description 产品开通时间
     *
     * @var string
     */
    public $openTime;

    /**
     * @description 规格类型
     *
     * @var string
     */
    public $specType;

    /**
     * @description 产品生效时间
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appCode'        => 'AppCode',
        'appName'        => 'AppName',
        'endTime'        => 'EndTime',
        'instanceMemo'   => 'InstanceMemo',
        'instanceStatus' => 'InstanceStatus',
        'openTime'       => 'OpenTime',
        'specType'       => 'SpecType',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceMemo) {
            $res['InstanceMemo'] = $this->instanceMemo;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceMemo'])) {
            $model->instanceMemo = $map['InstanceMemo'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
