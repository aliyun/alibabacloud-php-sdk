<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDasAgentSSEResponseBody;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var int
     */
    public $charCount;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var string[]
     */
    public $toolParams;
    protected $_name = [
        'charCount' => 'CharCount',
        'code' => 'Code',
        'requestId' => 'RequestId',
        'toolName' => 'ToolName',
        'toolParams' => 'ToolParams',
    ];

    public function validate()
    {
        if (\is_array($this->toolParams)) {
            Model::validateArray($this->toolParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charCount) {
            $res['CharCount'] = $this->charCount;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
        }

        if (null !== $this->toolParams) {
            if (\is_array($this->toolParams)) {
                $res['ToolParams'] = [];
                $n1 = 0;
                foreach ($this->toolParams as $item1) {
                    $res['ToolParams'][$n1] = $item1;
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
        if (isset($map['CharCount'])) {
            $model->charCount = $map['CharCount'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        if (isset($map['ToolParams'])) {
            if (!empty($map['ToolParams'])) {
                $model->toolParams = [];
                $n1 = 0;
                foreach ($map['ToolParams'] as $item1) {
                    $model->toolParams[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
