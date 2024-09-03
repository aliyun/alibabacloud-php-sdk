<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyFlowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The categories of the Flow.
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description The Flow ID.
     *
     * @example 3939399****
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The Flow name.
     *
     * @example flow-00203
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'categories' => 'Categories',
        'flowId'     => 'FlowId',
        'flowName'   => 'FlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
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
