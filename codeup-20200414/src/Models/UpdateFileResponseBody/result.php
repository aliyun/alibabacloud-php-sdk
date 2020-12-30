<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $branchName;
    protected $_name = [
        'filePath'   => 'FilePath',
        'branchName' => 'BranchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
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
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        return $model;
    }
}
