<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\File;

use AlibabaCloud\Tea\Model;

class dirSizeInfo extends Model
{
    /**
     * @var int
     */
    public $dirCount;

    /**
     * @var int
     */
    public $fileCount;
    protected $_name = [
        'dirCount'  => 'dir_count',
        'fileCount' => 'file_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dirCount) {
            $res['dir_count'] = $this->dirCount;
        }
        if (null !== $this->fileCount) {
            $res['file_count'] = $this->fileCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dirSizeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dir_count'])) {
            $model->dirCount = $map['dir_count'];
        }
        if (isset($map['file_count'])) {
            $model->fileCount = $map['file_count'];
        }

        return $model;
    }
}
