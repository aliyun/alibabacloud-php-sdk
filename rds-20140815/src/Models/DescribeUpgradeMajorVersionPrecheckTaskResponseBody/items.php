<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionPrecheckTaskResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $checkTime;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var int
     */
    public $recommendDiskSize;

    /**
     * @var int
     */
    public $recommendLeastMemSize;

    /**
     * @var int
     */
    public $recommendMemSize;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sourceMajorVersion;

    /**
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'checkTime' => 'CheckTime',
        'detail' => 'Detail',
        'effectiveTime' => 'EffectiveTime',
        'recommendDiskSize' => 'RecommendDiskSize',
        'recommendLeastMemSize' => 'RecommendLeastMemSize',
        'recommendMemSize' => 'RecommendMemSize',
        'result' => 'Result',
        'sourceMajorVersion' => 'SourceMajorVersion',
        'targetMajorVersion' => 'TargetMajorVersion',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->recommendDiskSize) {
            $res['RecommendDiskSize'] = $this->recommendDiskSize;
        }

        if (null !== $this->recommendLeastMemSize) {
            $res['RecommendLeastMemSize'] = $this->recommendLeastMemSize;
        }

        if (null !== $this->recommendMemSize) {
            $res['RecommendMemSize'] = $this->recommendMemSize;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->sourceMajorVersion) {
            $res['SourceMajorVersion'] = $this->sourceMajorVersion;
        }

        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['RecommendDiskSize'])) {
            $model->recommendDiskSize = $map['RecommendDiskSize'];
        }

        if (isset($map['RecommendLeastMemSize'])) {
            $model->recommendLeastMemSize = $map['RecommendLeastMemSize'];
        }

        if (isset($map['RecommendMemSize'])) {
            $model->recommendMemSize = $map['RecommendMemSize'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['SourceMajorVersion'])) {
            $model->sourceMajorVersion = $map['SourceMajorVersion'];
        }

        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
