<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\DescribeVerifyTokenResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $verifyPageUrl;

    /**
     * @var string
     */
    public $verifyToken;
    protected $_name = [
        'verifyPageUrl' => 'VerifyPageUrl',
        'verifyToken'   => 'VerifyToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyPageUrl) {
            $res['VerifyPageUrl'] = $this->verifyPageUrl;
        }
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyPageUrl'])) {
            $model->verifyPageUrl = $map['VerifyPageUrl'];
        }
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }

        return $model;
    }
}
