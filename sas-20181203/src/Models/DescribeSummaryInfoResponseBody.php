<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryInfoResponseBody extends Model
{
    /**
     * @description The number of unprotected assets.
     *
     * @example 12
     *
     * @var int
     */
    public $aegisClientOfflineCount;

    /**
     * @description The number of protected assets.
     *
     * @example 127
     *
     * @var int
     */
    public $aegisClientOnlineCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D40198E1-6EA8-482E-B3C7-D9573D75C0CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security score of the assets. Valid values:
     *
     *   95 to 100: The assets are secure.
     *   85 to 94: The assets are exposed to a few security risks. We recommend that you reinforce your security system in a timely manner.
     *   70 to 84: The assets are exposed to multiple security risks. We recommend that you reinforce your security system in a timely manner.
     *   69 or lower: The current security system is unable to protect the assets against intrusions. We recommend that you reinforce your security system at the earliest opportunity.
     *
     * @example 44
     *
     * @var int
     */
    public $securityScore;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
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
