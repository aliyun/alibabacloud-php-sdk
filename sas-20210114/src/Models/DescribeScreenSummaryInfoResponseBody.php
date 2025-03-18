<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenSummaryInfoResponseBody extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $aegisClientOfflineCount;

    /**
     * @example 127
     *
     * @var int
     */
    public $aegisClientOnlineCount;

    /**
     * @example 23AD0BD2-8771-5647-819E-XXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $securityScore;
    protected $_name = [
        'aegisClientOfflineCount' => 'AegisClientOfflineCount',
        'aegisClientOnlineCount' => 'AegisClientOnlineCount',
        'requestId' => 'RequestId',
        'securityScore' => 'SecurityScore',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aegisClientOfflineCount) {
            $res['AegisClientOfflineCount'] = $this->aegisClientOfflineCount;
        }
        if (null !== $this->aegisClientOnlineCount) {
            $res['AegisClientOnlineCount'] = $this->aegisClientOnlineCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenSummaryInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisClientOfflineCount'])) {
            $model->aegisClientOfflineCount = $map['AegisClientOfflineCount'];
        }
        if (isset($map['AegisClientOnlineCount'])) {
            $model->aegisClientOnlineCount = $map['AegisClientOnlineCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }

        return $model;
    }
}
