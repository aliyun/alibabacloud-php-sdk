<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $aegisClientOnlineCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $aegisClientOfflineCount;

    /**
     * @var int
     */
    public $securityScore;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'aegisClientOnlineCount'  => 'AegisClientOnlineCount',
        'requestId'               => 'RequestId',
        'aegisClientOfflineCount' => 'AegisClientOfflineCount',
        'securityScore'           => 'SecurityScore',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aegisClientOnlineCount) {
            $res['AegisClientOnlineCount'] = $this->aegisClientOnlineCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aegisClientOfflineCount) {
            $res['AegisClientOfflineCount'] = $this->aegisClientOfflineCount;
        }
        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSummaryInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisClientOnlineCount'])) {
            $model->aegisClientOnlineCount = $map['AegisClientOnlineCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AegisClientOfflineCount'])) {
            $model->aegisClientOfflineCount = $map['AegisClientOfflineCount'];
        }
        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
