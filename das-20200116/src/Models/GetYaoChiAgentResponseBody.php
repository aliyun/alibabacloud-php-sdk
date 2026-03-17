<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentResponseBody\functionCall;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentResponseBody\subAgentCall;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentResponseBody\uiFunctionCall;

class GetYaoChiAgentResponseBody extends Model
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
    public $parentId;

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
     * @var subAgentCall[]
     */
    public $subAgentCall;

    /**
     * @var uiFunctionCall[]
     */
    public $uiFunctionCall;
    protected $_name = [
        'content' => 'Content',
        'functionCall' => 'FunctionCall',
        'parentId' => 'ParentId',
        'product' => 'Product',
        'queryId' => 'QueryId',
        'reasoningContent' => 'ReasoningContent',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'subAgentCall' => 'SubAgentCall',
        'uiFunctionCall' => 'UiFunctionCall',
    ];

    public function validate()
    {
        if (\is_array($this->functionCall)) {
            Model::validateArray($this->functionCall);
        }
        if (\is_array($this->subAgentCall)) {
            Model::validateArray($this->subAgentCall);
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

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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

        if (null !== $this->subAgentCall) {
            if (\is_array($this->subAgentCall)) {
                $res['SubAgentCall'] = [];
                $n1 = 0;
                foreach ($this->subAgentCall as $item1) {
                    $res['SubAgentCall'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
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

        if (isset($map['SubAgentCall'])) {
            if (!empty($map['SubAgentCall'])) {
                $model->subAgentCall = [];
                $n1 = 0;
                foreach ($map['SubAgentCall'] as $item1) {
                    $model->subAgentCall[$n1] = subAgentCall::fromMap($item1);
                    ++$n1;
                }
            }
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
