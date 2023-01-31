<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateNumberDistrictInfoParsingTaskRequest extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @example 190464
     *
     * @var int
     */
    public $fileSize;
    protected $_name = [
        'filePath' => 'FilePath',
        'fileSize' => 'FileSize',
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
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNumberDistrictInfoParsingTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
