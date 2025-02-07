<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\httpDelivery;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
