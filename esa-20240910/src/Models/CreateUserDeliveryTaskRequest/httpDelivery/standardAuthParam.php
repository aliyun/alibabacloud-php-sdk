<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\httpDelivery;

use AlibabaCloud\Tea\Model;

class standardAuthParam extends Model
{
    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $privateKey;

    /**
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
