<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgInferenceJobInfoDTO extends Model
{
    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string[]
     */
    public $resultImageUrl;
    protected $_name = [
        'createUserId' => 'createUserId',
        'id' => 'id',
        'jobStatus' => 'jobStatus',
        'modelId' => 'modelId',
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
