<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeRiskEventStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $attackAppCnt;

    /**
     * @var int
     */
    public $attackCnt;

    /**
     * @var int
     */
    public $attackIpCnt;

    /**
     * @var int
     */
    public $dropCnt;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackAppCnt' => 'AttackAppCnt',
        'attackCnt' => 'AttackCnt',
        'attackIpCnt' => 'AttackIpCnt',
        'dropCnt' => 'DropCnt',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackAppCnt) {
            $res['AttackAppCnt'] = $this->attackAppCnt;
        }

        if (null !== $this->attackCnt) {
            $res['AttackCnt'] = $this->attackCnt;
        }

        if (null !== $this->attackIpCnt) {
            $res['AttackIpCnt'] = $this->attackIpCnt;
        }

        if (null !== $this->dropCnt) {
            $res['DropCnt'] = $this->dropCnt;
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
        if (isset($map['AttackAppCnt'])) {
            $model->attackAppCnt = $map['AttackAppCnt'];
        }

        if (isset($map['AttackCnt'])) {
            $model->attackCnt = $map['AttackCnt'];
        }

        if (isset($map['AttackIpCnt'])) {
            $model->attackIpCnt = $map['AttackIpCnt'];
        }

        if (isset($map['DropCnt'])) {
            $model->dropCnt = $map['DropCnt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
