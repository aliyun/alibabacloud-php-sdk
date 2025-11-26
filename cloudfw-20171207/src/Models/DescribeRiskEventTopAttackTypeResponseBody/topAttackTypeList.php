<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventTopAttackTypeResponseBody;

use AlibabaCloud\Dara\Model;

class topAttackTypeList extends Model
{
    /**
     * @var int
     */
    public $attackCnt;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var int
     */
    public $protectCnt;
    protected $_name = [
        'attackCnt' => 'AttackCnt',
        'attackType' => 'AttackType',
        'protectCnt' => 'ProtectCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackCnt) {
            $res['AttackCnt'] = $this->attackCnt;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->protectCnt) {
            $res['ProtectCnt'] = $this->protectCnt;
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
        if (isset($map['AttackCnt'])) {
            $model->attackCnt = $map['AttackCnt'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['ProtectCnt'])) {
            $model->protectCnt = $map['ProtectCnt'];
        }

        return $model;
    }
}
