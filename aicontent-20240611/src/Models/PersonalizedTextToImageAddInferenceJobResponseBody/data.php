<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\PersonalizedTextToImageAddInferenceJobResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $promptId;

    /**
     * @var string[]
     */
    public $resultImageUrl;
    protected $_name = [
        'createTime' => 'createTime',
        'id' => 'id',
        'jobStatus' => 'jobStatus',
        'jobTrainProgress' => 'jobTrainProgress',
        'modelId' => 'modelId',
        'promptId' => 'promptId',
        'resultImageUrl' => 'resultImageUrl',
    ];

    public function validate()
    {
        if (\is_array($this->resultImageUrl)) {
            Model::validateArray($this->resultImageUrl);
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

        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        if (null !== $this->jobTrainProgress) {
            $res['jobTrainProgress'] = $this->jobTrainProgress;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->promptId) {
            $res['promptId'] = $this->promptId;
        }

        if (null !== $this->resultImageUrl) {
            if (\is_array($this->resultImageUrl)) {
                $res['resultImageUrl'] = [];
                $n1 = 0;
                foreach ($this->resultImageUrl as $item1) {
                    $res['resultImageUrl'][$n1++] = $item1;
                }
            }
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

        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        if (isset($map['jobTrainProgress'])) {
            $model->jobTrainProgress = $map['jobTrainProgress'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['promptId'])) {
            $model->promptId = $map['promptId'];
        }

        if (isset($map['resultImageUrl'])) {
            if (!empty($map['resultImageUrl'])) {
                $model->resultImageUrl = [];
                $n1 = 0;
                foreach ($map['resultImageUrl'] as $item1) {
                    $model->resultImageUrl[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
