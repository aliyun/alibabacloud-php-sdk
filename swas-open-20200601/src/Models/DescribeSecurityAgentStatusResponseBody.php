<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecurityAgentStatusResponseBody extends Model
{
    /**
     * @description The status of the Security Center agent. Valid values:
     *
     *   pause: The Security Center agent suspends protection for your server.
     *   online: The Security Center agent is protecting your server.
     *   offline: The Security Center agent does not protect your server.
     *
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientStatus' => 'ClientStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityAgentStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
