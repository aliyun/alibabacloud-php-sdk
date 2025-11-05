<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class ListDatabasesRequest extends Model
{
    /**
     * @var bool
     */
    public $external;
    protected $_name = [
        'external' => 'external',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->external) {
            $res['external'] = $this->external;
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
        if (isset($map['external'])) {
            $model->external = $map['external'];
        }

        return $model;
    }
}
