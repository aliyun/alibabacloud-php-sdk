<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskPageListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string[]
     */
    public $expectVelocities;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $normalCount;

    /**
     * @var int
     */
    public $normalSize;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $riskSize;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $sampleScene;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'expectVelocities' => 'expectVelocities',
        'gmtCreate' => 'gmtCreate',
        'normalCount' => 'normalCount',
        'normalSize' => 'normalSize',
        'riskCount' => 'riskCount',
        'riskSize' => 'riskSize',
        'sampleName' => 'sampleName',
        'sampleScene' => 'sampleScene',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->expectVelocities)) {
            Model::validateArray($this->expectVelocities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectVelocities) {
            if (\is_array($this->expectVelocities)) {
                $res['expectVelocities'] = [];
                $n1 = 0;
                foreach ($this->expectVelocities as $item1) {
                    $res['expectVelocities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->normalCount) {
            $res['normalCount'] = $this->normalCount;
        }

        if (null !== $this->normalSize) {
            $res['normalSize'] = $this->normalSize;
        }

        if (null !== $this->riskCount) {
            $res['riskCount'] = $this->riskCount;
        }

        if (null !== $this->riskSize) {
            $res['riskSize'] = $this->riskSize;
        }

        if (null !== $this->sampleName) {
            $res['sampleName'] = $this->sampleName;
        }

        if (null !== $this->sampleScene) {
            $res['sampleScene'] = $this->sampleScene;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['expectVelocities'])) {
            if (!empty($map['expectVelocities'])) {
                $model->expectVelocities = [];
                $n1 = 0;
                foreach ($map['expectVelocities'] as $item1) {
                    $model->expectVelocities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['normalCount'])) {
            $model->normalCount = $map['normalCount'];
        }

        if (isset($map['normalSize'])) {
            $model->normalSize = $map['normalSize'];
        }

        if (isset($map['riskCount'])) {
            $model->riskCount = $map['riskCount'];
        }

        if (isset($map['riskSize'])) {
            $model->riskSize = $map['riskSize'];
        }

        if (isset($map['sampleName'])) {
            $model->sampleName = $map['sampleName'];
        }

        if (isset($map['sampleScene'])) {
            $model->sampleScene = $map['sampleScene'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
