<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class GetManagerInfoByAuthCodeRequest extends Model
{
    /**
     * @example e49cd070452f0044813a467d4743****
     *
     * @var string
     */
    public $authCode;
    protected $_name = [
        'authCode' => 'AuthCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetManagerInfoByAuthCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        return $model;
    }
}
