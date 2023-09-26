<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ResetCustomizedResponseBody\sdkDemos;
use AlibabaCloud\Tea\Model;

class ResetCustomizedResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdkDemos
     */
    public $sdkDemos;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdkDemos'  => 'SdkDemos',
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
        if (null !== $this->sdkDemos) {
            $res['SdkDemos'] = null !== $this->sdkDemos ? $this->sdkDemos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetCustomizedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SdkDemos'])) {
            $model->sdkDemos = sdkDemos::fromMap($map['SdkDemos']);
        }

        return $model;
    }
}
