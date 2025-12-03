<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DeleteHBaseHaDBRequest extends Model
{
    /**
     * @var string
     */
    public $bdsId;

    /**
     * @var string
     */
    public $haId;
    protected $_name = [
        'bdsId' => 'BdsId',
        'haId' => 'HaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bdsId) {
            $res['BdsId'] = $this->bdsId;
        }

        if (null !== $this->haId) {
            $res['HaId'] = $this->haId;
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
        if (isset($map['BdsId'])) {
            $model->bdsId = $map['BdsId'];
        }

        if (isset($map['HaId'])) {
            $model->haId = $map['HaId'];
        }

        return $model;
    }
}
