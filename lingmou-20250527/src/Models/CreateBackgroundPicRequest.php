<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CreateBackgroundPicRequest extends Model
{
    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'filename' => 'filename',
        'ossKey' => 'ossKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filename) {
            $res['filename'] = $this->filename;
        }

        if (null !== $this->ossKey) {
            $res['ossKey'] = $this->ossKey;
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
        if (isset($map['filename'])) {
            $model->filename = $map['filename'];
        }

        if (isset($map['ossKey'])) {
            $model->ossKey = $map['ossKey'];
        }

        return $model;
    }
}
