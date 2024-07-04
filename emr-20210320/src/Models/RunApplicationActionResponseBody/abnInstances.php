<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponseBody;

use AlibabaCloud\Tea\Model;

class abnInstances extends Model
{
    /**
     * @description The ID of the abnormal node.
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the abnormal node.
     *
     * @example core1-1
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'nodeId'   => 'NodeId',
        'nodeName' => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abnInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
