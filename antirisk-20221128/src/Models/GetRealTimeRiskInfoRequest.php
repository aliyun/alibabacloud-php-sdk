<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\Tea\Model;

class GetRealTimeRiskInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Ab63aqUKx9TmYRhPV7LnRLybLRQOEG6GQsr-oGlT8bo6-_z_oYxTqqutBz6R0dBognMN1DBvZImDadsKb8k_Hfcj8A8nrXtxch_nKVg5xARkRmMU2SU=
     *
     * @var string
     */
    public $atoken;

    /**
     * @description This parameter is required.
     *
     * @example 62c792d188ccdf4b7ec1aa38
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 360risk
     *
     * @var string
     */
    public $extra;
    protected $_name = [
        'atoken'       => 'atoken',
        'dataSourceId' => 'dataSourceId',
        'extra'        => 'extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atoken) {
            $res['atoken'] = $this->atoken;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealTimeRiskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['atoken'])) {
            $model->atoken = $map['atoken'];
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        return $model;
    }
}
