<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class StopInvocationRequest extends Model
{
    /**
     * @example f-hz044748dzepds0
     *
     * @var string
     */
    public $invokeId;

    /**
     * @var string[]
     */
    public $nodeIdList;
    protected $_name = [
        'invokeId'   => 'InvokeId',
        'nodeIdList' => 'NodeIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = $this->nodeIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInvocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = $map['NodeIdList'];
            }
        }

        return $model;
    }
}
