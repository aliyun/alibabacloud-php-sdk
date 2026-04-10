<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\branch;

use AlibabaCloud\Dara\Model;

class childBranch extends Model
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
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var bool
     */
    public $hasChild;

    /**
     * @var string
     */
    public $insName;
    protected $_name = [
        'branchLsn' => 'BranchLsn',
        'branchTime' => 'BranchTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'hasChild' => 'HasChild',
        'insName' => 'InsName',
    ];

    public function validate()
    {
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

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->hasChild) {
            $res['HasChild'] = $this->hasChild;
        }

        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
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

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['HasChild'])) {
            $model->hasChild = $map['HasChild'];
        }

        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        return $model;
    }
}
