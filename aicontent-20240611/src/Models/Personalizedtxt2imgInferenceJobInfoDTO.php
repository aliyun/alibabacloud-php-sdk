<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgInferenceJobInfoDTO extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $id;

    /**
     * @example 123456
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example 123456
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 123456
     *
     * @var string[]
     */
    public $resultImageUrl;
    protected $_name = [
        'createUserId'   => 'createUserId',
        'id'             => 'id',
        'jobStatus'      => 'jobStatus',
        'modelId'        => 'modelId',
        'resultImageUrl' => 'resultImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUserId) {
            $res['createUserId'] = $this->createUserId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->resultImageUrl) {
            $res['resultImageUrl'] = $this->resultImageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgInferenceJobInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createUserId'])) {
            $model->createUserId = $map['createUserId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['resultImageUrl'])) {
            if (!empty($map['resultImageUrl'])) {
                $model->resultImageUrl = $map['resultImageUrl'];
            }
        }

        return $model;
    }
}
