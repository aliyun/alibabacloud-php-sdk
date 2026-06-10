<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class DeleteFilesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $fileIdsShrink;
    protected $_name = [
        'fileIdsShrink' => 'FileIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileIdsShrink) {
            $res['FileIds'] = $this->fileIdsShrink;
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
        if (isset($map['FileIds'])) {
            $model->fileIdsShrink = $map['FileIds'];
        }

        return $model;
    }
}
