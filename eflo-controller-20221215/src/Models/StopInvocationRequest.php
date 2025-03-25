<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class StopInvocationRequest extends Model
{
    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string[]
     */
    public $nodeIdList;
    protected $_name = [
        'invokeId' => 'InvokeId',
        'nodeIdList' => 'NodeIdList',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->nodeIdList) {
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1++] = $item1;
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
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
