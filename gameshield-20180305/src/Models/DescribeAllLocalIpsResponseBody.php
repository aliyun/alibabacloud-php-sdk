<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAllLocalIpsResponseBody\localIps;
use AlibabaCloud\Tea\Model;

class DescribeAllLocalIpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var localIps
     */
    public $localIps;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'localIps'   => 'LocalIps',
        'promptInfo' => 'PromptInfo',
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
        if (null !== $this->localIps) {
            $res['LocalIps'] = null !== $this->localIps ? $this->localIps->toMap() : null;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllLocalIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LocalIps'])) {
            $model->localIps = localIps::fromMap($map['LocalIps']);
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
