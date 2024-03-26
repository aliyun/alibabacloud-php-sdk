<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserWafLogStatusResponseBody extends Model
{
    /**
     * @description The ID of the region where WAF logs are stored. Valid values:
     *
     *   **cn-hangzhou**: China (Hangzhou).
     *   **cn-beijing**: China (Beijing).
     *   **cn-hongkong**: China (Hong Kong).
     *   **ap-southeast-1**: Singapore.
     *   **ap-southeast-2**: Australia (Sydney).
     *   **ap-southeast-3**: Malaysia (Kuala Lumpur).
     *   **ap-southeast-5**: Indonesia (Jakarta).
     *   **ap-southeast-6**: Philippines (Manila).
     *   **ap-southeast-7**: Thailand (Bangkok).
     *   **me-east-1**: UAE (Dubai).
     *   **eu-central-1**: Germany (Frankfurt).
     *   **us-east-1**: US (Virginia).
     *   **us-west-1**: US (Silicon Valley).
     *   **ap-northeast-1**: Japan (Tokyo).
     *   **ap-northeast-2**: South Korea (Seoul).
     *   **ap-south-1**: India (Mumbai).
     *   **eu-west-1**: UK (London).
     *   **cn-hangzhou-finance**: China East 1 Finance.
     *   **cn-shanghai-finance-1**: China East 2 Finance.
     *   **cn-shenzhen-finance**: China South 1 Finance.
     *
     * >  The China East 1 Finance, China East 2 Finance, and China South 1 Finance regions are available only for Alibaba Finance Cloud users. Alibaba Finance Cloud users are also limited to storing logs within these specific regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $logRegionId;

    /**
     * @description The status of WAF logs.
     *
     *   **initializing**
     *   **initialize_failed**
     *   **normal**
     *   **releasing**
     *   **release_failed**
     *
     * @example normal
     *
     * @var string
     */
    public $logStatus;

    /**
     * @description The request ID.
     *
     * @example D7861F61-5B61-46CE-A47C-6B19160D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the log status was modified. Unit: milliseconds.
     *
     * @example 1706771796859
     *
     * @var int
     */
    public $statusUpdateTime;
    protected $_name = [
        'logRegionId'      => 'LogRegionId',
        'logStatus'        => 'LogStatus',
        'requestId'        => 'RequestId',
        'statusUpdateTime' => 'StatusUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }
        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusUpdateTime) {
            $res['StatusUpdateTime'] = $this->statusUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserWafLogStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }
        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusUpdateTime'])) {
            $model->statusUpdateTime = $map['StatusUpdateTime'];
        }

        return $model;
    }
}
