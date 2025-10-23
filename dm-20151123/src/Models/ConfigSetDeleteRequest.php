<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ConfigSetDeleteRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

    /**
     * @var bool
     */
    public $isForce;
    protected $_name = [
        'ids' => 'Ids',
        'isForce' => 'IsForce',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        if (null !== $this->isForce) {
            $res['IsForce'] = $this->isForce;
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
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        if (isset($map['IsForce'])) {
            $model->isForce = $map['IsForce'];
        }

        return $model;
    }
}
