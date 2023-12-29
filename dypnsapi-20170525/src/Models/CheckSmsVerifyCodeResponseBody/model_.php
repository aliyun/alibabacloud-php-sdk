<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckSmsVerifyCodeResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description The external ID.
     *
     * @example 1212312
     *
     * @var string
     */
    public $outId;

    /**
     * @description The verification results. Valid values:
     *
     *   PASS: The verification is successful.
     *   UNKNOWN: The verification failed.
     *
     * @example PASS
     *
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'outId'        => 'OutId',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
