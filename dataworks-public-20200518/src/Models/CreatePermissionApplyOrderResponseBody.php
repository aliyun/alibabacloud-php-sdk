<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreatePermissionApplyOrderResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $flowId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowId' => 'FlowId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->flowId)) {
            Model::validateArray($this->flowId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowId) {
            if (\is_array($this->flowId)) {
                $res['FlowId'] = [];
                $n1 = 0;
                foreach ($this->flowId as $item1) {
                    $res['FlowId'][$n1++] = $item1;
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
        if (isset($map['FlowId'])) {
            if (!empty($map['FlowId'])) {
                $model->flowId = [];
                $n1 = 0;
                foreach ($map['FlowId'] as $item1) {
                    $model->flowId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
