<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowShrinkRequest extends Model
{
    /**
     * @description The categories of the Flow.
     *
     * @var string
     */
    public $categoriesShrink;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 9493884
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The Flow ID.
     *
     * @example 2938838
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the Flow.
     *
     * @example flow_001
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'categoriesShrink' => 'Categories',
        'custSpaceId'      => 'CustSpaceId',
        'flowId'           => 'FlowId',
        'flowName'         => 'FlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoriesShrink) {
            $res['Categories'] = $this->categoriesShrink;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            $model->categoriesShrink = $map['Categories'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
