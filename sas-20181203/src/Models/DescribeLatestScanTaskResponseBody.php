<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeLatestScanTaskResponseBody extends Model
{
    /**
     * @var int
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskNum;

    /**
     * @var string
     */
    public $targetInfo;

    /**
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'lastCheckTime' => 'LastCheckTime',
        'requestId' => 'RequestId',
        'riskNum' => 'RiskNum',
        'targetInfo' => 'TargetInfo',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskNum) {
            $res['RiskNum'] = $this->riskNum;
        }

        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskNum'])) {
            $model->riskNum = $map['RiskNum'];
        }

        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
