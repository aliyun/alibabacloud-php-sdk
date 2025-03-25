<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class StopInvocationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $nodeIdListShrink;
    protected $_name = [
        'invokeId' => 'InvokeId',
        'nodeIdListShrink' => 'NodeIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->nodeIdListShrink) {
            $res['NodeIdList'] = $this->nodeIdListShrink;
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
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['NodeIdList'])) {
            $model->nodeIdListShrink = $map['NodeIdList'];
        }

        return $model;
    }
}
