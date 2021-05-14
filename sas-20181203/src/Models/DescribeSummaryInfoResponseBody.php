<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $aegisClientOfflineCount;

    /**
     * @var int
     */
    public $aegisClientOnlineCount;

    /**
     * @var int
     */
    public $securityScore;
    protected $_name = [
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'aegisClientOfflineCount' => 'AegisClientOfflineCount',
        'aegisClientOnlineCount'  => 'AegisClientOnlineCount',
        'securityScore'           => 'SecurityScore',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->aegisClientOfflineCount) {
            $res['AegisClientOfflineCount'] = $this->aegisClientOfflineCount;
        }
        if (null !== $this->aegisClientOnlineCount) {
            $res['AegisClientOnlineCount'] = $this->aegisClientOnlineCount;
        }
        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['AegisClientOfflineCount'])) {
            $model->aegisClientOfflineCount = $map['AegisClientOfflineCount'];
        }
        if (isset($map['AegisClientOnlineCount'])) {
            $model->aegisClientOnlineCount = $map['AegisClientOnlineCount'];
        }
        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }

        return $model;
    }
}
