<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $filePath;
    protected $_name = [
        'branchName' => 'branchName',
        'filePath'   => 'filePath',
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
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
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
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        return $model;
    }
}
