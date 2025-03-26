<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgModelTrainJobInfoDTO extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var Personalizedtxt2imgInferenceJobInfoDTO[]
     */
    public $inferenceJobList;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'imageUrl' => 'ImageUrl',
        'inferenceJobList' => 'InferenceJobList',
        'jobStatus' => 'JobStatus',
        'name' => 'Name',
        'objectType' => 'ObjectType',
        'id' => 'id',
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
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['ImageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['ImageUrl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->inferenceJobList) {
            if (\is_array($this->inferenceJobList)) {
                $res['InferenceJobList'] = [];
                $n1 = 0;
                foreach ($this->inferenceJobList as $item1) {
                    $res['InferenceJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['ImageUrl'])) {
            if (!empty($map['ImageUrl'])) {
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['ImageUrl'] as $item1) {
                    $model->imageUrl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InferenceJobList'])) {
            if (!empty($map['InferenceJobList'])) {
                $model->inferenceJobList = [];
                $n1 = 0;
                foreach ($map['InferenceJobList'] as $item1) {
                    $model->inferenceJobList[$n1++] = Personalizedtxt2imgInferenceJobInfoDTO::fromMap($item1);
                }
            }
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
