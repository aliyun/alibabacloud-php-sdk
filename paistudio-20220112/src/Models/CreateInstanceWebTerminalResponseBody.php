<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceWebTerminalResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example wss://pai-dlc-proxy-cn-shanghai.aliyun.com/terminal/t1157703270994901/dlcmjzjt1dxbmx4h/dlcmjzjt1dxbmx4h-worker-0?Token=******
     *
     * @var string
     */
    public $webTerminalId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'webTerminalId' => 'WebTerminalId',
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
        if (null !== $this->webTerminalId) {
            $res['WebTerminalId'] = $this->webTerminalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceWebTerminalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebTerminalId'])) {
            $model->webTerminalId = $map['WebTerminalId'];
        }

        return $model;
    }
}
