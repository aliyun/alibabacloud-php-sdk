<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTunnelResponseBody\ccTunnel;
use AlibabaCloud\Tea\Model;

class DescribeCcTunnelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var ccTunnel
     */
    public $ccTunnel;
    protected $_name = [
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
        'ccTunnel'   => 'CcTunnel',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->ccTunnel) {
            $res['CcTunnel'] = null !== $this->ccTunnel ? $this->ccTunnel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcTunnelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['CcTunnel'])) {
            $model->ccTunnel = ccTunnel::fromMap($map['CcTunnel']);
        }

        return $model;
    }
}
