<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;

class GetModelDeploymentSpecResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $inferenceSpec;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inferenceSpec' => 'InferenceSpec',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->inferenceSpec)) {
            Model::validateArray($this->inferenceSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inferenceSpec) {
            if (\is_array($this->inferenceSpec)) {
                $res['InferenceSpec'] = [];
                foreach ($this->inferenceSpec as $key1 => $value1) {
                    $res['InferenceSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InferenceSpec'])) {
            if (!empty($map['InferenceSpec'])) {
                $model->inferenceSpec = [];
                foreach ($map['InferenceSpec'] as $key1 => $value1) {
                    $model->inferenceSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
