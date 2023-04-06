<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\Tea\Model;

class GetZidTagScoreByAtokenRequest extends Model
{
    /**
     * @description atoken
     *
     * @example AcNh1pZFEJ9wEO1RkqK2S9Qt0DHxZR6riGmx4CpGrxCpf3_LxvQNQQGaLjGWRg_-Un1yC47qfEiwRysoCJgQrBSa7b274rzhuIW4QDer7J41X18PiHI=
     *
     * @var string
     */
    public $atoken;

    /**
     * @example 59892ebcaed179694b000104
     *
     * @var string
     */
    public $dataSourceId;
    protected $_name = [
        'atoken'       => 'atoken',
        'dataSourceId' => 'dataSourceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetZidTagScoreByAtokenRequest
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

        return $model;
    }
}
