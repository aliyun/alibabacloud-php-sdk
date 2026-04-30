<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterConfigureClientBalanceRequest extends Model
{
    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var bool
     */
    public $enableBalance;

    /**
     * @var float
     */
    public $initialBalance;
    protected $_name = [
        'balanceType' => 'balanceType',
        'enableBalance' => 'enableBalance',
        'initialBalance' => 'initialBalance',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->enableBalance) {
            $res['enableBalance'] = $this->enableBalance;
        }

        if (null !== $this->initialBalance) {
            $res['initialBalance'] = $this->initialBalance;
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
        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['enableBalance'])) {
            $model->enableBalance = $map['enableBalance'];
        }

        if (isset($map['initialBalance'])) {
            $model->initialBalance = $map['initialBalance'];
        }

        return $model;
    }
}
