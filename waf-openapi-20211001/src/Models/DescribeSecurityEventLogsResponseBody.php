<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventLogsResponseBody\securityEventMetaData;

class DescribeSecurityEventLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $securityEventLogs;

    /**
     * @var int
     */
    public $securityEventLogsTotalCount;

    /**
     * @var securityEventMetaData
     */
    public $securityEventMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventLogs' => 'SecurityEventLogs',
        'securityEventLogsTotalCount' => 'SecurityEventLogsTotalCount',
        'securityEventMetaData' => 'SecurityEventMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventLogs)) {
            Model::validateArray($this->securityEventLogs);
        }
        if (null !== $this->securityEventMetaData) {
            $this->securityEventMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventLogs) {
            if (\is_array($this->securityEventLogs)) {
                $res['SecurityEventLogs'] = [];
                $n1 = 0;
                foreach ($this->securityEventLogs as $item1) {
                    $res['SecurityEventLogs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityEventLogsTotalCount) {
            $res['SecurityEventLogsTotalCount'] = $this->securityEventLogsTotalCount;
        }

        if (null !== $this->securityEventMetaData) {
            $res['SecurityEventMetaData'] = null !== $this->securityEventMetaData ? $this->securityEventMetaData->toArray($noStream) : $this->securityEventMetaData;
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

        if (isset($map['SecurityEventLogs'])) {
            if (!empty($map['SecurityEventLogs'])) {
                $model->securityEventLogs = [];
                $n1 = 0;
                foreach ($map['SecurityEventLogs'] as $item1) {
                    $model->securityEventLogs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityEventLogsTotalCount'])) {
            $model->securityEventLogsTotalCount = $map['SecurityEventLogsTotalCount'];
        }

        if (isset($map['SecurityEventMetaData'])) {
            $model->securityEventMetaData = securityEventMetaData::fromMap($map['SecurityEventMetaData']);
        }

        return $model;
    }
}
