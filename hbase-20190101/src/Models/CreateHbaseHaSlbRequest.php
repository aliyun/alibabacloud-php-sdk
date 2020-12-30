<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateHbaseHaSlbRequest extends Model
{
    /**
     * @var string
     */
    public $bdsId;

    /**
     * @var string
     */
    public $haId;

    /**
     * @var string
     */
    public $haTypes;

    /**
     * @var string
     */
    public $hbaseType;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'bdsId'       => 'BdsId',
        'haId'        => 'HaId',
        'haTypes'     => 'HaTypes',
        'hbaseType'   => 'HbaseType',
        'clientToken' => 'ClientToken',
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
        if (null !== $this->hbaseType) {
            $res['HbaseType'] = $this->hbaseType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHbaseHaSlbRequest
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
        if (isset($map['HbaseType'])) {
            $model->hbaseType = $map['HbaseType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
