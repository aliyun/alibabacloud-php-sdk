<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject\recommendRuleDTOs;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject\recommendVariableDTOs;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

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
    public $normalSize;

    /**
     * @var recommendRuleDTOs[]
     */
    public $recommendRuleDTOs;

    /**
     * @var recommendVariableDTOs[]
     */
    public $recommendVariableDTOs;

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
     * @var string
     */
    public $sampleSceneName;

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
        'eventCode'             => 'eventCode',
        'eventName'             => 'eventName',
        'expectVelocities'      => 'expectVelocities',
        'gmtCreate'             => 'gmtCreate',
        'normalSize'            => 'normalSize',
        'recommendRuleDTOs'     => 'recommendRuleDTOs',
        'recommendVariableDTOs' => 'recommendVariableDTOs',
        'riskSize'              => 'riskSize',
        'sampleName'            => 'sampleName',
        'sampleScene'           => 'sampleScene',
        'sampleSceneName'       => 'sampleSceneName',
        'taskId'                => 'taskId',
        'taskName'              => 'taskName',
        'taskStatus'            => 'taskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->expectVelocities) {
            $res['expectVelocities'] = $this->expectVelocities;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->normalSize) {
            $res['normalSize'] = $this->normalSize;
        }
        if (null !== $this->recommendRuleDTOs) {
            $res['recommendRuleDTOs'] = [];
            if (null !== $this->recommendRuleDTOs && \is_array($this->recommendRuleDTOs)) {
                $n = 0;
                foreach ($this->recommendRuleDTOs as $item) {
                    $res['recommendRuleDTOs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recommendVariableDTOs) {
            $res['recommendVariableDTOs'] = [];
            if (null !== $this->recommendVariableDTOs && \is_array($this->recommendVariableDTOs)) {
                $n = 0;
                foreach ($this->recommendVariableDTOs as $item) {
                    $res['recommendVariableDTOs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sampleSceneName) {
            $res['sampleSceneName'] = $this->sampleSceneName;
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

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['expectVelocities'])) {
            if (!empty($map['expectVelocities'])) {
                $model->expectVelocities = $map['expectVelocities'];
            }
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['normalSize'])) {
            $model->normalSize = $map['normalSize'];
        }
        if (isset($map['recommendRuleDTOs'])) {
            if (!empty($map['recommendRuleDTOs'])) {
                $model->recommendRuleDTOs = [];
                $n                        = 0;
                foreach ($map['recommendRuleDTOs'] as $item) {
                    $model->recommendRuleDTOs[$n++] = null !== $item ? recommendRuleDTOs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['recommendVariableDTOs'])) {
            if (!empty($map['recommendVariableDTOs'])) {
                $model->recommendVariableDTOs = [];
                $n                            = 0;
                foreach ($map['recommendVariableDTOs'] as $item) {
                    $model->recommendVariableDTOs[$n++] = null !== $item ? recommendVariableDTOs::fromMap($item) : $item;
                }
            }
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
        if (isset($map['sampleSceneName'])) {
            $model->sampleSceneName = $map['sampleSceneName'];
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
