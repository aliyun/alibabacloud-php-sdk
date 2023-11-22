<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoriesShrink;

    /**
     * @example 93994848
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example flow_001
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'categoriesShrink' => 'Categories',
        'custSpaceId'      => 'CustSpaceId',
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
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowShrinkRequest
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
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
