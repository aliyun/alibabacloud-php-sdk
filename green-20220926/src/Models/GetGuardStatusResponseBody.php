<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardStatusResponseBody\logScanStatus;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardStatusResponseBody\protectionStatus;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardStatusResponseBody\realTimeStatus;

class GetGuardStatusResponseBody extends Model
{
    /**
     * @var logScanStatus[]
     */
    public $logScanStatus;

    /**
     * @var protectionStatus[]
     */
    public $protectionStatus;

    /**
     * @var realTimeStatus[]
     */
    public $realTimeStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logScanStatus' => 'LogScanStatus',
        'protectionStatus' => 'ProtectionStatus',
        'realTimeStatus' => 'RealTimeStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logScanStatus)) {
            Model::validateArray($this->logScanStatus);
        }
        if (\is_array($this->protectionStatus)) {
            Model::validateArray($this->protectionStatus);
        }
        if (\is_array($this->realTimeStatus)) {
            Model::validateArray($this->realTimeStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logScanStatus) {
            if (\is_array($this->logScanStatus)) {
                $res['LogScanStatus'] = [];
                $n1 = 0;
                foreach ($this->logScanStatus as $item1) {
                    $res['LogScanStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protectionStatus) {
            if (\is_array($this->protectionStatus)) {
                $res['ProtectionStatus'] = [];
                $n1 = 0;
                foreach ($this->protectionStatus as $item1) {
                    $res['ProtectionStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->realTimeStatus) {
            if (\is_array($this->realTimeStatus)) {
                $res['RealTimeStatus'] = [];
                $n1 = 0;
                foreach ($this->realTimeStatus as $item1) {
                    $res['RealTimeStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LogScanStatus'])) {
            if (!empty($map['LogScanStatus'])) {
                $model->logScanStatus = [];
                $n1 = 0;
                foreach ($map['LogScanStatus'] as $item1) {
                    $model->logScanStatus[$n1] = logScanStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProtectionStatus'])) {
            if (!empty($map['ProtectionStatus'])) {
                $model->protectionStatus = [];
                $n1 = 0;
                foreach ($map['ProtectionStatus'] as $item1) {
                    $model->protectionStatus[$n1] = protectionStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RealTimeStatus'])) {
            if (!empty($map['RealTimeStatus'])) {
                $model->realTimeStatus = [];
                $n1 = 0;
                foreach ($map['RealTimeStatus'] as $item1) {
                    $model->realTimeStatus[$n1] = realTimeStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
