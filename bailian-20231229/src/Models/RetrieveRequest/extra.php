<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Dara\Model;

class extra extends Model
{
    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'uniqueId' => 'uniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uniqueId) {
            $res['uniqueId'] = $this->uniqueId;
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
        if (isset($map['uniqueId'])) {
            $model->uniqueId = $map['uniqueId'];
        }

        return $model;
    }
}
