<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeADInfoResponseBody extends Model
{
    /**
     * @description The DNS information about the AD domain.
     *
     * @example 100.100.XX.XX
     *
     * @var string
     */
    public $ADDNS;

    /**
     * @description The service IP address of the AD domain.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ADServerIpAddress;

    /**
     * @description The status of the AD domain. Valid values:
     *
     *   **-1**: The instance is being added to the AD domain.
     *   **0**: The instance fails to be added to the AD domain.
     *   **1**: The instance is added to the AD domain.
     *
     * @example 1
     *
     * @var string
     */
    public $ADStatus;

    /**
     * @description The cause of the exception.
     *
     * @example XXXX
     *
     * @var string
     */
    public $abnormalReason;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The username of the AD domain.
     *
     * @example test_01
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'ADDNS'             => 'ADDNS',
        'ADServerIpAddress' => 'ADServerIpAddress',
        'ADStatus'          => 'ADStatus',
        'abnormalReason'    => 'AbnormalReason',
        'requestId'         => 'RequestId',
        'userName'          => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ADDNS) {
            $res['ADDNS'] = $this->ADDNS;
        }
        if (null !== $this->ADServerIpAddress) {
            $res['ADServerIpAddress'] = $this->ADServerIpAddress;
        }
        if (null !== $this->ADStatus) {
            $res['ADStatus'] = $this->ADStatus;
        }
        if (null !== $this->abnormalReason) {
            $res['AbnormalReason'] = $this->abnormalReason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeADInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ADDNS'])) {
            $model->ADDNS = $map['ADDNS'];
        }
        if (isset($map['ADServerIpAddress'])) {
            $model->ADServerIpAddress = $map['ADServerIpAddress'];
        }
        if (isset($map['ADStatus'])) {
            $model->ADStatus = $map['ADStatus'];
        }
        if (isset($map['AbnormalReason'])) {
            $model->abnormalReason = $map['AbnormalReason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
