<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaConnectFlowRequest extends Model
{
    /**
     * @description The flow name.
     *
     * This parameter is required.
     * @example AliTestFlow
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The region in which the flow resides.
     *
     * This parameter is required.
     * @example ap-southeast-1
     *
     * @var string
     */
    public $flowRegion;
    protected $_name = [
        'flowName'   => 'FlowName',
        'flowRegion' => 'FlowRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowRegion) {
            $res['FlowRegion'] = $this->flowRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaConnectFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowRegion'])) {
            $model->flowRegion = $map['FlowRegion'];
        }

        return $model;
    }
}
