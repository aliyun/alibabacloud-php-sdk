<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNodePoolsRequest extends Model
{
    /**
     * @description 节点池名称。
     *
     * @example nodepool-test
     *
     * @var string
     */
    public $nodepoolName;
    protected $_name = [
        'nodepoolName' => 'NodepoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepoolName) {
            $res['NodepoolName'] = $this->nodepoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodePoolsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodepoolName'])) {
            $model->nodepoolName = $map['NodepoolName'];
        }

        return $model;
    }
}
