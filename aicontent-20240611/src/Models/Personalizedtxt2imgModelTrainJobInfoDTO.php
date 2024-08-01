<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 123456
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'createUserId'     => 'CreateUserId',
        'imageUrl'         => 'ImageUrl',
        'inferenceJobList' => 'InferenceJobList',
        'jobStatus'        => 'JobStatus',
        'name'             => 'Name',
        'objectType'       => 'ObjectType',
        'id'               => 'id',
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
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->inferenceJobList) {
            $res['InferenceJobList'] = [];
            if (null !== $this->inferenceJobList && \is_array($this->inferenceJobList)) {
                $n = 0;
                foreach ($this->inferenceJobList as $item) {
                    $res['InferenceJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgModelTrainJobInfoDTO
     */
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
                $model->imageUrl = $map['ImageUrl'];
            }
        }
        if (isset($map['InferenceJobList'])) {
            if (!empty($map['InferenceJobList'])) {
                $model->inferenceJobList = [];
                $n                       = 0;
                foreach ($map['InferenceJobList'] as $item) {
                    $model->inferenceJobList[$n++] = null !== $item ? Personalizedtxt2imgInferenceJobInfoDTO::fromMap($item) : $item;
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
