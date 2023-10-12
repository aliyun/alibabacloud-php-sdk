<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ScheduleType extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $relatedWorker;

    /**
     * @example scheduleTypeIdxxx
     *
     * @var string
     */
    public $scheduleTypeId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 张三
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'key'            => 'Key',
        'relatedWorker'  => 'RelatedWorker',
        'scheduleTypeId' => 'ScheduleTypeId',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->relatedWorker) {
            $res['RelatedWorker'] = $this->relatedWorker;
        }
        if (null !== $this->scheduleTypeId) {
            $res['ScheduleTypeId'] = $this->scheduleTypeId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduleType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RelatedWorker'])) {
            if (!empty($map['RelatedWorker'])) {
                $model->relatedWorker = $map['RelatedWorker'];
            }
        }
        if (isset($map['ScheduleTypeId'])) {
            $model->scheduleTypeId = $map['ScheduleTypeId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
