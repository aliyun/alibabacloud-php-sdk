<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\OpenApiMultiResponse;

use AlibabaCloud\SDK\AiContent\V20240611\Models\OpenApiMultiResponse\data\inferenceJobList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @example 456
     *
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $inferenceImageCount;

    /**
     * @var inferenceJobList[]
     */
    public $inferenceJobList;

    /**
     * @example TRAINING
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $jobTrainProgress;

    /**
     * @example modelId-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 可爱熊猫模型训练任务
     *
     * @var string
     */
    public $name;

    /**
     * @example panda
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'createTime'          => 'createTime',
        'id'                  => 'id',
        'imageUrl'            => 'imageUrl',
        'inferenceImageCount' => 'inferenceImageCount',
        'inferenceJobList'    => 'inferenceJobList',
        'jobStatus'           => 'jobStatus',
        'jobTrainProgress'    => 'jobTrainProgress',
        'modelId'             => 'modelId',
        'name'                => 'name',
        'objectType'          => 'objectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }
        if (null !== $this->inferenceImageCount) {
            $res['inferenceImageCount'] = $this->inferenceImageCount;
        }
        if (null !== $this->inferenceJobList) {
            $res['inferenceJobList'] = [];
            if (null !== $this->inferenceJobList && \is_array($this->inferenceJobList)) {
                $n = 0;
                foreach ($this->inferenceJobList as $item) {
                    $res['inferenceJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobTrainProgress) {
            $res['jobTrainProgress'] = $this->jobTrainProgress;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['imageUrl'])) {
            if (!empty($map['imageUrl'])) {
                $model->imageUrl = $map['imageUrl'];
            }
        }
        if (isset($map['inferenceImageCount'])) {
            $model->inferenceImageCount = $map['inferenceImageCount'];
        }
        if (isset($map['inferenceJobList'])) {
            if (!empty($map['inferenceJobList'])) {
                $model->inferenceJobList = [];
                $n                       = 0;
                foreach ($map['inferenceJobList'] as $item) {
                    $model->inferenceJobList[$n++] = null !== $item ? inferenceJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }
        if (isset($map['jobTrainProgress'])) {
            $model->jobTrainProgress = $map['jobTrainProgress'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        return $model;
    }
}
