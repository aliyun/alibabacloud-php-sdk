<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GetPolarAgentResponseBody\functionCall;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GetPolarAgentResponseBody\uiFunctionCall;

class GetPolarAgentResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var functionCall[]
     */
    public $functionCall;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $reasoningContent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var uiFunctionCall[]
     */
    public $uiFunctionCall;
    protected $_name = [
        'content' => 'Content',
        'functionCall' => 'FunctionCall',
        'product' => 'Product',
        'queryId' => 'QueryId',
        'reasoningContent' => 'ReasoningContent',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'uiFunctionCall' => 'UiFunctionCall',
    ];

    public function validate()
    {
        if (\is_array($this->functionCall)) {
            Model::validateArray($this->functionCall);
        }
        if (\is_array($this->uiFunctionCall)) {
            Model::validateArray($this->uiFunctionCall);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->functionCall) {
            if (\is_array($this->functionCall)) {
                $res['FunctionCall'] = [];
                $n1 = 0;
                foreach ($this->functionCall as $item1) {
                    $res['FunctionCall'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->reasoningContent) {
            $res['ReasoningContent'] = $this->reasoningContent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uiFunctionCall) {
            if (\is_array($this->uiFunctionCall)) {
                $res['UiFunctionCall'] = [];
                $n1 = 0;
                foreach ($this->uiFunctionCall as $item1) {
                    $res['UiFunctionCall'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FunctionCall'])) {
            if (!empty($map['FunctionCall'])) {
                $model->functionCall = [];
                $n1 = 0;
                foreach ($map['FunctionCall'] as $item1) {
                    $model->functionCall[$n1] = functionCall::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['ReasoningContent'])) {
            $model->reasoningContent = $map['ReasoningContent'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['UiFunctionCall'])) {
            if (!empty($map['UiFunctionCall'])) {
                $model->uiFunctionCall = [];
                $n1 = 0;
                foreach ($map['UiFunctionCall'] as $item1) {
                    $model->uiFunctionCall[$n1] = uiFunctionCall::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
