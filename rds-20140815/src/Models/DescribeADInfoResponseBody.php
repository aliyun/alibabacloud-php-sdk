<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeADInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $ADDNS;

    /**
     * @var string
     */
    public $ADServerIpAddress;

    /**
     * @var string
     */
    public $ADStatus;

    /**
     * @var string
     */
    public $abnormalReason;

    /**
     * @var string
     */
    public $requestId;

    /**
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
