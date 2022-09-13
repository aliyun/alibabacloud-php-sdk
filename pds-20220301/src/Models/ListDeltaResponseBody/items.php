<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\ListDeltaResponseBody;

use AlibabaCloud\SDK\Pds\V20220301\Models\File;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var File
     */
    public $file;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'file'   => 'file',
        'fileId' => 'file_id',
        'op'     => 'op',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file'])) {
            $model->file = File::fromMap($map['file']);
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        return $model;
    }
}
