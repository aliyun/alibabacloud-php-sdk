<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteHbaseHaSlbRequest extends Model
{
    /**
     * @example bds-t4n3496whj23ia4k
     *
     * @var string
     */
    public $bdsId;

    /**
     * @example ha-v21tmnxjwh2yuy1il
     *
     * @var string
     */
    public $haId;

    /**
     * @example thrift
     *
     * @var string
     */
    public $haTypes;
    protected $_name = [
        'bdsId'   => 'BdsId',
        'haId'    => 'HaId',
        'haTypes' => 'HaTypes',
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
        if (null !== $this->haTypes) {
            $res['HaTypes'] = $this->haTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHbaseHaSlbRequest
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
        if (isset($map['HaTypes'])) {
            $model->haTypes = $map['HaTypes'];
        }

        return $model;
    }
}
