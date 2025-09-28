<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizToken;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $stsAccessKeyId;

    /**
     * @var string
     */
    public $stsAccessKeySecret;

    /**
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'bizToken' => 'BizToken',
        'expireTime' => 'ExpireTime',
        'stsAccessKeyId' => 'StsAccessKeyId',
        'stsAccessKeySecret' => 'StsAccessKeySecret',
        'stsToken' => 'StsToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizToken) {
            $res['BizToken'] = $this->bizToken;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->stsAccessKeyId) {
            $res['StsAccessKeyId'] = $this->stsAccessKeyId;
        }

        if (null !== $this->stsAccessKeySecret) {
            $res['StsAccessKeySecret'] = $this->stsAccessKeySecret;
        }

        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizToken'])) {
            $model->bizToken = $map['BizToken'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['StsAccessKeyId'])) {
            $model->stsAccessKeyId = $map['StsAccessKeyId'];
        }

        if (isset($map['StsAccessKeySecret'])) {
            $model->stsAccessKeySecret = $map['StsAccessKeySecret'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        return $model;
    }
}
