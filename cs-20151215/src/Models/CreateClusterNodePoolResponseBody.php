<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterNodePoolResponseBody extends Model
{
    /**
     * @description The ID of the node pool that is created.
     *
     * @example np31da1b38983f4511b490fc62108a****
     *
     * @var string
     */
    public $nodepoolId;
    protected $_name = [
        'nodepoolId' => 'nodepool_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterNodePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        return $model;
    }
}
