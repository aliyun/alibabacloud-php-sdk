<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetTopicListResponseBody\topicList;

use AlibabaCloud\Dara\Model;

class topicVO extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'status' => 'Status',
        'statusName' => 'StatusName',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
