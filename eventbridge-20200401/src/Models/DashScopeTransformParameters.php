<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DashScopeTransformParameters\messages;

class DashScopeTransformParameters extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $requestPerMinute;

    /**
     * @var string
     */
    public $structuredOutputJsonSchema;

    /**
     * @var int
     */
    public $tokenPerMinute;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'messages' => 'Messages',
        'model' => 'Model',
        'requestPerMinute' => 'RequestPerMinute',
        'structuredOutputJsonSchema' => 'StructuredOutputJsonSchema',
        'tokenPerMinute' => 'TokenPerMinute',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->requestPerMinute) {
            $res['RequestPerMinute'] = $this->requestPerMinute;
        }

        if (null !== $this->structuredOutputJsonSchema) {
            $res['StructuredOutputJsonSchema'] = $this->structuredOutputJsonSchema;
        }

        if (null !== $this->tokenPerMinute) {
            $res['TokenPerMinute'] = $this->tokenPerMinute;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['RequestPerMinute'])) {
            $model->requestPerMinute = $map['RequestPerMinute'];
        }

        if (isset($map['StructuredOutputJsonSchema'])) {
            $model->structuredOutputJsonSchema = $map['StructuredOutputJsonSchema'];
        }

        if (isset($map['TokenPerMinute'])) {
            $model->tokenPerMinute = $map['TokenPerMinute'];
        }

        return $model;
    }
}
