<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GetRealPersonVerificationResultRequest extends Model
{
    /**
     * @var string
     */
    public $verificationToken;

    /**
     * @var string
     */
    public $materialHash;
    protected $_name = [
        'verificationToken' => 'VerificationToken',
        'materialHash'      => 'MaterialHash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verificationToken) {
            $res['VerificationToken'] = $this->verificationToken;
        }
        if (null !== $this->materialHash) {
            $res['MaterialHash'] = $this->materialHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealPersonVerificationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerificationToken'])) {
            $model->verificationToken = $map['VerificationToken'];
        }
        if (isset($map['MaterialHash'])) {
            $model->materialHash = $map['MaterialHash'];
        }

        return $model;
    }
}
