<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetBranchInfoResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetBranchInfoResponseBody\result\commitInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $protectedBranch;

    /**
     * @var commitInfo
     */
    public $commitInfo;

    /**
     * @var string
     */
    public $branchName;
    protected $_name = [
        'protectedBranch' => 'ProtectedBranch',
        'commitInfo'      => 'CommitInfo',
        'branchName'      => 'BranchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectedBranch) {
            $res['ProtectedBranch'] = $this->protectedBranch;
        }
        if (null !== $this->commitInfo) {
            $res['CommitInfo'] = null !== $this->commitInfo ? $this->commitInfo->toMap() : null;
        }
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
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
        if (isset($map['ProtectedBranch'])) {
            $model->protectedBranch = $map['ProtectedBranch'];
        }
        if (isset($map['CommitInfo'])) {
            $model->commitInfo = commitInfo::fromMap($map['CommitInfo']);
        }
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        return $model;
    }
}
