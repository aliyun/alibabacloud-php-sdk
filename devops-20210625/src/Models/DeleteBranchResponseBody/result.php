<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteBranchResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example deleteBranch
     *
     * @var string
     */
    public $branchName;
    protected $_name = [
        'branchName' => 'branchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['branchName'] = $this->branchName;
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
        if (isset($map['branchName'])) {
            $model->branchName = $map['branchName'];
        }

        return $model;
    }
}
