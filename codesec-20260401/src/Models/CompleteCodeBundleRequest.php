<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CompleteCodeBundleRequest extends Model
{
    /**
     * @var int
     */
    public $byteSize;

    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'byteSize' => 'byteSize',
        'contentType' => 'contentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byteSize) {
            $res['byteSize'] = $this->byteSize;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
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
        if (isset($map['byteSize'])) {
            $model->byteSize = $map['byteSize'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        return $model;
    }
}
