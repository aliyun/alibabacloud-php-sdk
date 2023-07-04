<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\DetailsResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 批次号
     *
     * @example 27
     *
     * @var int
     */
    public $batchId;

    /**
     * @description 呼叫状态描述
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $callDesc;

    /**
     * @description 外呼ID
     *
     * @example 28dd74a4-30ec-43c0-9bec-272924c51eeb
     *
     * @var string
     */
    public $callId;

    /**
     * @description 呼叫状态
     *
     * @example 1
     *
     * @var int
     */
    public $callStatus;

    /**
     * @description 外呼类型
     *
     * @example 2001
     *
     * @var int
     */
    public $callType;

    /**
     * @description 导入时间
     *
     * @example 2023-04-25 15:19:02
     *
     * @var string
     */
    public $importTime;

    /**
     * @description 拦截原因
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $interceptReason;

    /**
     * @description 外呼号码
     *
     * @example 188******454
     *
     * @var string
     */
    public $number;

    /**
     * @description 号码状态描述
     *
     * @example 示例值
     *
     * @var string
     */
    public $numberDesc;

    /**
     * @description 外呼号码MD5
     *
     * @example cbe1b40f76f2cca4735954886b706ffa
     *
     * @var string
     */
    public $numberMD5;

    /**
     * @description 号码状态
     *
     * @example 1
     *
     * @var int
     */
    public $numberStatus;

    /**
     * @description 用户自定义标签
     *
     * @example A
     *
     * @var string
     */
    public $tag;

    /**
     * @description 任务ID
     *
     * @example 28
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId'         => 'BatchId',
        'callDesc'        => 'CallDesc',
        'callId'          => 'CallId',
        'callStatus'      => 'CallStatus',
        'callType'        => 'CallType',
        'importTime'      => 'ImportTime',
        'interceptReason' => 'InterceptReason',
        'number'          => 'Number',
        'numberDesc'      => 'NumberDesc',
        'numberMD5'       => 'NumberMD5',
        'numberStatus'    => 'NumberStatus',
        'tag'             => 'Tag',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->callDesc) {
            $res['CallDesc'] = $this->callDesc;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }
        if (null !== $this->interceptReason) {
            $res['InterceptReason'] = $this->interceptReason;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberDesc) {
            $res['NumberDesc'] = $this->numberDesc;
        }
        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }
        if (null !== $this->numberStatus) {
            $res['NumberStatus'] = $this->numberStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['CallDesc'])) {
            $model->callDesc = $map['CallDesc'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }
        if (isset($map['InterceptReason'])) {
            $model->interceptReason = $map['InterceptReason'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberDesc'])) {
            $model->numberDesc = $map['NumberDesc'];
        }
        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }
        if (isset($map['NumberStatus'])) {
            $model->numberStatus = $map['NumberStatus'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
