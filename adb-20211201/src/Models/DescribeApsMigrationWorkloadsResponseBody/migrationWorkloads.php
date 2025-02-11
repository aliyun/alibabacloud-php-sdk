<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsMigrationWorkloadsResponseBody;

use AlibabaCloud\Dara\Model;

class migrationWorkloads extends Model
{
    /**
     * @var int
     */
    public $acuCount;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $failedMsg;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $maxRT;
    /**
     * @var string
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ossLocation;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $workloadSubType;
    protected $_name = [
        'acuCount'        => 'AcuCount',
        'createTime'      => 'CreateTime',
        'failedMsg'       => 'FailedMsg',
        'id'              => 'Id',
        'maxRT'           => 'MaxRT',
        'modifyTime'      => 'ModifyTime',
        'name'            => 'Name',
        'ossLocation'     => 'OssLocation',
        'state'           => 'State',
        'targetType'      => 'TargetType',
        'workloadSubType' => 'WorkloadSubType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acuCount) {
            $res['AcuCount'] = $this->acuCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->failedMsg) {
            $res['FailedMsg'] = $this->failedMsg;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maxRT) {
            $res['MaxRT'] = $this->maxRT;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossLocation) {
            $res['OssLocation'] = $this->ossLocation;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->workloadSubType) {
            $res['WorkloadSubType'] = $this->workloadSubType;
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
        if (isset($map['AcuCount'])) {
            $model->acuCount = $map['AcuCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FailedMsg'])) {
            $model->failedMsg = $map['FailedMsg'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaxRT'])) {
            $model->maxRT = $map['MaxRT'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssLocation'])) {
            $model->ossLocation = $map['OssLocation'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['WorkloadSubType'])) {
            $model->workloadSubType = $map['WorkloadSubType'];
        }

        return $model;
    }
}
