<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryBranchesResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryBranchesResponseBody\result\commitInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $branchName;

    /**
     * @var commitInfo
     */
    public $commitInfo;

    /**
     * @var bool
     */
    public $protectedBranch;
    protected $_name = [
        'branchName'      => 'BranchName',
        'commitInfo'      => 'CommitInfo',
        'protectedBranch' => 'ProtectedBranch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }
        if (null !== $this->commitInfo) {
            $res['CommitInfo'] = null !== $this->commitInfo ? $this->commitInfo->toMap() : null;
        }
        if (null !== $this->protectedBranch) {
            $res['ProtectedBranch'] = $this->protectedBranch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }
        if (isset($map['CommitInfo'])) {
            $model->commitInfo = commitInfo::fromMap($map['CommitInfo']);
        }
        if (isset($map['ProtectedBranch'])) {
            $model->protectedBranch = $map['ProtectedBranch'];
        }

        return $model;
    }
}
