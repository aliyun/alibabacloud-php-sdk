<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\httpDelivery;

use AlibabaCloud\Tea\Model;

class standardAuthParam extends Model
{
    /**
     * @description The validity period of the signature.
     *
     * >  The value must be greater than 0. We recommend that you specify a value that is greater than 300.
     * @example 300
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The private key.
     *
     * @example ***
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The URI path for server authentication.
     *
     * @example v1/log/upload
     *
     * @var string
     */
    public $urlPath;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'privateKey'  => 'PrivateKey',
        'urlPath'     => 'UrlPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->urlPath) {
            $res['UrlPath'] = $this->urlPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardAuthParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['UrlPath'])) {
            $model->urlPath = $map['UrlPath'];
        }

        return $model;
    }
}
