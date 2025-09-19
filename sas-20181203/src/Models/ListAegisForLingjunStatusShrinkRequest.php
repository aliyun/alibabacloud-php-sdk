<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAegisForLingjunStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $uuidsShrink;
    protected $_name = [
        'uuidsShrink' => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uuidsShrink) {
            $res['Uuids'] = $this->uuidsShrink;
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
        if (isset($map['Uuids'])) {
            $model->uuidsShrink = $map['Uuids'];
        }

        return $model;
    }
}
