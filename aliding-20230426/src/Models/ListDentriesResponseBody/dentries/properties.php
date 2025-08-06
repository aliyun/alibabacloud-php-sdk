<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesResponseBody\dentries;

use AlibabaCloud\Dara\Model;

class properties extends Model
{
    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'readOnly' => 'ReadOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
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
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
