<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterNodePoolsRequest extends Model
{
    /**
     * @var string
     */
    public $nodepoolName;
    protected $_name = [
        'nodepoolName' => 'NodepoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodepoolName) {
            $res['NodepoolName'] = $this->nodepoolName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodepoolName'])) {
            $model->nodepoolName = $map['NodepoolName'];
        }

        return $model;
    }
}
