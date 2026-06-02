<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;

class WithdrawFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $flowVersion;
    protected $_name = [
        'flowId' => 'FlowId',
        'flowVersion' => 'FlowVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
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
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }

        return $model;
    }
}
