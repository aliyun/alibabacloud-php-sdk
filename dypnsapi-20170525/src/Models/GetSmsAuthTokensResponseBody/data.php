<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****
     *
     * @var string
     */
    public $bizToken;

    /**
     * @example 1631526326000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example STS.NSqC****
     *
     * @var string
     */
    public $stsAccessKeyId;

    /**
     * @example VboZ4xbZ****
     *
     * @var string
     */
    public $stsAccessKeySecret;

    /**
     * @example CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****
     *
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'bizToken'           => 'BizToken',
        'expireTime'         => 'ExpireTime',
        'stsAccessKeyId'     => 'StsAccessKeyId',
        'stsAccessKeySecret' => 'StsAccessKeySecret',
        'stsToken'           => 'StsToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
