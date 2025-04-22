<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\ListDeltaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\File;

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
        'file' => 'file',
        'fileId' => 'file_id',
        'op' => 'op',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->op) {
            $res['op'] = $this->op;
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
