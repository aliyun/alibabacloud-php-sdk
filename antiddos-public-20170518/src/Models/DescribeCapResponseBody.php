<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapResponseBody\capUrl;
use AlibabaCloud\Tea\Model;

class DescribeCapResponseBody extends Model
{
    /**
     * @description The download link to the traffic data that is captured when a DDoS attack event occurs.
     *
     * @var capUrl
     */
    public $capUrl;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C728D7E9-9A39-52E0-966B-5C33118BDBB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'capUrl'    => 'CapUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capUrl) {
            $res['CapUrl'] = null !== $this->capUrl ? $this->capUrl->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCapResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapUrl'])) {
            $model->capUrl = capUrl::fromMap($map['CapUrl']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
