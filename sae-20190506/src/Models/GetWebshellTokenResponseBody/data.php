<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetWebshellTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example HttpUrl :  "https://saenext.console.aliyun.com/cn-shenzhen/app-list/app1/micro-app/shell/pod1?tokenId=xxx
     *
     * @var string
     */
    public $httpUrl;

    /**
     * @example zWWpvRj_5pzof4hfo7-hGynM8oGMmO_7
     *
     * @var string
     */
    public $token;

    /**
     * @example wss://sae-webshell.console.aliyun.com/websocket/eamWebshell?tokenId=xxx&region=cn-shenzhen
     *
     * @var string
     */
    public $webSocketUrl;
    protected $_name = [
        'httpUrl' => 'HttpUrl',
        'token' => 'Token',
        'webSocketUrl' => 'WebSocketUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpUrl) {
            $res['HttpUrl'] = $this->httpUrl;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->webSocketUrl) {
            $res['WebSocketUrl'] = $this->webSocketUrl;
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
        if (isset($map['HttpUrl'])) {
            $model->httpUrl = $map['HttpUrl'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['WebSocketUrl'])) {
            $model->webSocketUrl = $map['WebSocketUrl'];
        }

        return $model;
    }
}
