<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateCodeBundleRequest extends Model
{
    /**
     * @var string
     */
    public $ciMetadata;

    /**
     * @var string
     */
    public $filename;
    protected $_name = [
        'ciMetadata' => 'ciMetadata',
        'filename' => 'filename',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciMetadata) {
            $res['ciMetadata'] = $this->ciMetadata;
        }

        if (null !== $this->filename) {
            $res['filename'] = $this->filename;
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
        if (isset($map['ciMetadata'])) {
            $model->ciMetadata = $map['ciMetadata'];
        }

        if (isset($map['filename'])) {
            $model->filename = $map['filename'];
        }

        return $model;
    }
}
