<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetRandomPasswordResponseBody extends Model
{
    /**
     * @description The generated random password.
     *
     * @example IxGn>NMmNB(y?iZ<Yc,_H/{2GC\\"U****
     *
     * @var string
     */
    public $randomPassword;

    /**
     * @description The ID of the request.
     *
     * @example 6b0cbe25-5e33-467e-972e-7a83c6c97604
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'randomPassword' => 'RandomPassword',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->randomPassword) {
            $res['RandomPassword'] = $this->randomPassword;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRandomPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RandomPassword'])) {
            $model->randomPassword = $map['RandomPassword'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
