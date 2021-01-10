<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CloneFlowRequest extends Model
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
        'flowId'      => 'FlowId',
        'flowVersion' => 'FlowVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CloneFlowRequest
     */
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
