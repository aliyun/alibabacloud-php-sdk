<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\branch\childBranch;

class branch extends Model
{
    /**
     * @var string
     */
    public $branchLsn;

    /**
     * @var string
     */
    public $branchTime;

    /**
     * @var childBranch[]
     */
    public $childBranch;

    /**
     * @var string
     */
    public $parentInsName;
    protected $_name = [
        'branchLsn' => 'BranchLsn',
        'branchTime' => 'BranchTime',
        'childBranch' => 'ChildBranch',
        'parentInsName' => 'ParentInsName',
    ];

    public function validate()
    {
        if (\is_array($this->childBranch)) {
            Model::validateArray($this->childBranch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchLsn) {
            $res['BranchLsn'] = $this->branchLsn;
        }

        if (null !== $this->branchTime) {
            $res['BranchTime'] = $this->branchTime;
        }

        if (null !== $this->childBranch) {
            if (\is_array($this->childBranch)) {
                $res['ChildBranch'] = [];
                $n1 = 0;
                foreach ($this->childBranch as $item1) {
                    $res['ChildBranch'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentInsName) {
            $res['ParentInsName'] = $this->parentInsName;
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
        if (isset($map['BranchLsn'])) {
            $model->branchLsn = $map['BranchLsn'];
        }

        if (isset($map['BranchTime'])) {
            $model->branchTime = $map['BranchTime'];
        }

        if (isset($map['ChildBranch'])) {
            if (!empty($map['ChildBranch'])) {
                $model->childBranch = [];
                $n1 = 0;
                foreach ($map['ChildBranch'] as $item1) {
                    $model->childBranch[$n1] = childBranch::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentInsName'])) {
            $model->parentInsName = $map['ParentInsName'];
        }

        return $model;
    }
}
