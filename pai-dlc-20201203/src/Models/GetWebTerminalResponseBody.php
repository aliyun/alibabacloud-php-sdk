<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetWebTerminalResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $webTerminalUrl;
    protected $_name = [
        'requestId'      => 'RequestId',
        'webTerminalUrl' => 'WebTerminalUrl',
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
        if (null !== $this->webTerminalUrl) {
            $res['WebTerminalUrl'] = $this->webTerminalUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebTerminalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebTerminalUrl'])) {
            $model->webTerminalUrl = $map['WebTerminalUrl'];
        }

        return $model;
    }
}
