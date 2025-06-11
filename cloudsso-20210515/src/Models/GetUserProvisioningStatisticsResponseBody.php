<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningStatisticsResponseBody\userProvisioningStatistics;

class GetUserProvisioningStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioningStatistics
     */
    public $userProvisioningStatistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'userProvisioningStatistics' => 'UserProvisioningStatistics',
    ];

    public function validate()
    {
        if (null !== $this->userProvisioningStatistics) {
            $this->userProvisioningStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userProvisioningStatistics) {
            $res['UserProvisioningStatistics'] = null !== $this->userProvisioningStatistics ? $this->userProvisioningStatistics->toArray($noStream) : $this->userProvisioningStatistics;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
