<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgAddModelTrainJobResponseBody\data\inferenceJobList;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
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
     * @var string
     */
    public $jobStatus;

    /**
     * @var float
     */
    public $jobTrainProgress;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'createTime' => 'createTime',
        'id' => 'id',
        'imageUrl' => 'imageUrl',
        'inferenceImageCount' => 'inferenceImageCount',
        'inferenceJobList' => 'inferenceJobList',
        'jobStatus' => 'jobStatus',
        'jobTrainProgress' => 'jobTrainProgress',
        'modelId' => 'modelId',
        'name' => 'name',
        'objectType' => 'objectType',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrl)) {
            Model::validateArray($this->imageUrl);
        }
        if (\is_array($this->inferenceJobList)) {
            Model::validateArray($this->inferenceJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['imageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['imageUrl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->inferenceImageCount) {
            $res['inferenceImageCount'] = $this->inferenceImageCount;
        }

        if (null !== $this->inferenceJobList) {
            if (\is_array($this->inferenceJobList)) {
                $res['inferenceJobList'] = [];
                $n1 = 0;
                foreach ($this->inferenceJobList as $item1) {
                    $res['inferenceJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['imageUrl'] as $item1) {
                    $model->imageUrl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['inferenceImageCount'])) {
            $model->inferenceImageCount = $map['inferenceImageCount'];
        }

        if (isset($map['inferenceJobList'])) {
            if (!empty($map['inferenceJobList'])) {
                $model->inferenceJobList = [];
                $n1 = 0;
                foreach ($map['inferenceJobList'] as $item1) {
                    $model->inferenceJobList[$n1++] = inferenceJobList::fromMap($item1);
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
