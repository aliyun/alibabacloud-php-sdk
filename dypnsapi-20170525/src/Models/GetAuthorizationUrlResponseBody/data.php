<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthorizationUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&_env=prod
     *
     * @var string
     */
    public $authorizationUrl;
    protected $_name = [
        'authorizationUrl' => 'AuthorizationUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
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
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }

        return $model;
    }
}
