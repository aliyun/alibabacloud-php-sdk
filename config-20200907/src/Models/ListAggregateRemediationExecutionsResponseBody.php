<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsResponseBody\remediationExecutionData;

class ListAggregateRemediationExecutionsResponseBody extends Model
{
    /**
     * @var remediationExecutionData
     */
    public $remediationExecutionData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationExecutionData' => 'RemediationExecutionData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->remediationExecutionData) {
            $this->remediationExecutionData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediationExecutionData) {
            $res['RemediationExecutionData'] = null !== $this->remediationExecutionData ? $this->remediationExecutionData->toArray($noStream) : $this->remediationExecutionData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RemediationExecutionData'])) {
            $model->remediationExecutionData = remediationExecutionData::fromMap($map['RemediationExecutionData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
