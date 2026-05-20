<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateFileTagShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $fileInfosShrink;

    /**
     * @var string
     */
    public $updateMode;
    protected $_name = [
        'fileInfosShrink' => 'FileInfos',
        'updateMode' => 'UpdateMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfosShrink) {
            $res['FileInfos'] = $this->fileInfosShrink;
        }

        if (null !== $this->updateMode) {
            $res['UpdateMode'] = $this->updateMode;
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
        if (isset($map['FileInfos'])) {
            $model->fileInfosShrink = $map['FileInfos'];
        }

        if (isset($map['UpdateMode'])) {
            $model->updateMode = $map['UpdateMode'];
        }

        return $model;
    }
}
