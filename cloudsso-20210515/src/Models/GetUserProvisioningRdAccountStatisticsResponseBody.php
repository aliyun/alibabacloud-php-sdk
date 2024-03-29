<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningRdAccountStatisticsResponseBody\userProvisioningStatistics;
use AlibabaCloud\Tea\Model;

class GetUserProvisioningRdAccountStatisticsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F6F90F3D-4502-5877-B80B-97476F6AE2CC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics of the RAM user provisioning.
     *
     * @var userProvisioningStatistics
     */
    public $userProvisioningStatistics;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'userProvisioningStatistics' => 'UserProvisioningStatistics',
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
        if (null !== $this->userProvisioningStatistics) {
            $res['UserProvisioningStatistics'] = null !== $this->userProvisioningStatistics ? $this->userProvisioningStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProvisioningRdAccountStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserProvisioningStatistics'])) {
            $model->userProvisioningStatistics = userProvisioningStatistics::fromMap($map['UserProvisioningStatistics']);
        }

        return $model;
    }
}
