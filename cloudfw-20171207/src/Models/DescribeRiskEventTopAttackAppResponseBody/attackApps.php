<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventTopAttackAppResponseBody;

use AlibabaCloud\Dara\Model;

class attackApps extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var int
     */
    public $attackCnt;

    /**
     * @var int
     */
    public $dropCnt;
    protected $_name = [
        'app' => 'App',
        'attackCnt' => 'AttackCnt',
        'dropCnt' => 'DropCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->attackCnt) {
            $res['AttackCnt'] = $this->attackCnt;
        }

        if (null !== $this->dropCnt) {
            $res['DropCnt'] = $this->dropCnt;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['AttackCnt'])) {
            $model->attackCnt = $map['AttackCnt'];
        }

        if (isset($map['DropCnt'])) {
            $model->dropCnt = $map['DropCnt'];
        }

        return $model;
    }
}
