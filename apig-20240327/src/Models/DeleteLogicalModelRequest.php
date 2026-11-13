<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DeleteLogicalModelRequest extends Model
{
    /**
     * @var int
     */
    public $expectedRevision;
    protected $_name = [
        'expectedRevision' => 'expectedRevision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectedRevision) {
            $res['expectedRevision'] = $this->expectedRevision;
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
        if (isset($map['expectedRevision'])) {
            $model->expectedRevision = $map['expectedRevision'];
        }

        return $model;
    }
}
