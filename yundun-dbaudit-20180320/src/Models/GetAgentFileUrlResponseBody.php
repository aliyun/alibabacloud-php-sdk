<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetAgentFileUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $linuxFileUrl;

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $winFileUrl;
    protected $_name = [
        'requestId'    => 'RequestId',
        'linuxFileUrl' => 'LinuxFileUrl',
        'accessToken'  => 'AccessToken',
        'winFileUrl'   => 'WinFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->linuxFileUrl) {
            $res['LinuxFileUrl'] = $this->linuxFileUrl;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->winFileUrl) {
            $res['WinFileUrl'] = $this->winFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentFileUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LinuxFileUrl'])) {
            $model->linuxFileUrl = $map['LinuxFileUrl'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['WinFileUrl'])) {
            $model->winFileUrl = $map['WinFileUrl'];
        }

        return $model;
    }
}
