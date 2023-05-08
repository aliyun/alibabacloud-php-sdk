<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryInfoResponseBody extends Model
{
    /**
     * @description WB01014029
     *
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
     * @description Queries the security information about your assets. The information includes the security score and the numbers of protected and unprotected assets.
     *
     * @example D40198E1-6EA8-482E-B3C7-D9573D75C0CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 44
     *
     * @var int
     */
    public $securityScore;

    /**
     * @description DescribeSummaryInfo
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'aegisClientOfflineCount' => 'AegisClientOfflineCount',
        'aegisClientOnlineCount'  => 'AegisClientOnlineCount',
        'requestId'               => 'RequestId',
        'securityScore'           => 'SecurityScore',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
