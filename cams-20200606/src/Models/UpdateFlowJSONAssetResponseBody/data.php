<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\UpdateFlowJSONAssetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Flow ID。
     *
     * @example 84848847****
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'flowId' => 'FlowId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
