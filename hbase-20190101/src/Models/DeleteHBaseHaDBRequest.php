<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

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
        'haId'  => 'HaId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteHBaseHaDBRequest
     */
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
