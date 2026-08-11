<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models;

use AlibabaCloud\Dara\Model;

class inferenceMetadata extends Model
{
    /**
     * @var string[]
     */
    public $requestModality;

    /**
     * @var string[]
     */
    public $responseModality;
    protected $_name = [
        'requestModality' => 'requestModality',
        'responseModality' => 'responseModality',
    ];

    public function validate()
    {
        if (\is_array($this->requestModality)) {
            Model::validateArray($this->requestModality);
        }
        if (\is_array($this->responseModality)) {
            Model::validateArray($this->responseModality);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestModality) {
            if (\is_array($this->requestModality)) {
                $res['requestModality'] = [];
                $n1 = 0;
                foreach ($this->requestModality as $item1) {
                    $res['requestModality'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseModality) {
            if (\is_array($this->responseModality)) {
                $res['responseModality'] = [];
                $n1 = 0;
                foreach ($this->responseModality as $item1) {
                    $res['responseModality'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['requestModality'])) {
            if (!empty($map['requestModality'])) {
                $model->requestModality = [];
                $n1 = 0;
                foreach ($map['requestModality'] as $item1) {
                    $model->requestModality[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['responseModality'])) {
            if (!empty($map['responseModality'])) {
                $model->responseModality = [];
                $n1 = 0;
                foreach ($map['responseModality'] as $item1) {
                    $model->responseModality[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
