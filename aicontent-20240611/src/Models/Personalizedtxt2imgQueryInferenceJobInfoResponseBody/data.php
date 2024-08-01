<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\Personalizedtxt2imgQueryInferenceJobInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-12-25T12:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 3220
     *
     * @var string
     */
    public $id;

    /**
     * @example FINISHED
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
     * @example promptId-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $promptId;

    /**
     * @example 0000.png
     *
     * @var string[]
     */
    public $resultImageUrl;
    protected $_name = [
        'createTime'       => 'createTime',
        'id'               => 'id',
        'jobStatus'        => 'jobStatus',
        'jobTrainProgress' => 'jobTrainProgress',
        'modelId'          => 'modelId',
        'promptId'         => 'promptId',
        'resultImageUrl'   => 'resultImageUrl',
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
            $res['resultImageUrl'] = $this->resultImageUrl;
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
                $model->resultImageUrl = $map['resultImageUrl'];
            }
        }

        return $model;
    }
}
