<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @description The categories of the Flow.
     *
     * This parameter is required.
     * @var string[]
     */
    public $categories;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 93994848
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The name of the Flow.
     *
     * This parameter is required.
     * @example flow_001
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'categories'  => 'Categories',
        'custSpaceId' => 'CustSpaceId',
        'flowName'    => 'FlowName',
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
     * @return CreateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
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
