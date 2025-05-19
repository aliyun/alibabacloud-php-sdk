<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class DeleteHybridDoubleWriteRequest extends Model
{
    /**
     * @var string
     */
    public $sourceNamespace;

    /**
     * @var int
     */
    public $sourceUserId;
    protected $_name = [
        'sourceNamespace' => 'SourceNamespace',
        'sourceUserId' => 'SourceUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceNamespace) {
            $res['SourceNamespace'] = $this->sourceNamespace;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
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
        if (isset($map['SourceNamespace'])) {
            $model->sourceNamespace = $map['SourceNamespace'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        return $model;
    }
}
