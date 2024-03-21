<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyRequest extends Model
{
    /**
     * @example ATTORNEY
     *
     * @var string
     */
    public $fileType;
    protected $_name = [
        'fileType' => 'FileType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadFilePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
