<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class DeptBalanceSummaryDTO extends Model
{
    /**
     * @var BalancePoolSummaryDTO
     */
    public $monthly;

    /**
     * @var BalancePoolSummaryDTO
     */
    public $permanent;
    protected $_name = [
        'monthly' => 'monthly',
        'permanent' => 'permanent',
    ];

    public function validate()
    {
        if (null !== $this->monthly) {
            $this->monthly->validate();
        }
        if (null !== $this->permanent) {
            $this->permanent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monthly) {
            $res['monthly'] = null !== $this->monthly ? $this->monthly->toArray($noStream) : $this->monthly;
        }

        if (null !== $this->permanent) {
            $res['permanent'] = null !== $this->permanent ? $this->permanent->toArray($noStream) : $this->permanent;
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
        if (isset($map['monthly'])) {
            $model->monthly = BalancePoolSummaryDTO::fromMap($map['monthly']);
        }

        if (isset($map['permanent'])) {
            $model->permanent = BalancePoolSummaryDTO::fromMap($map['permanent']);
        }

        return $model;
    }
}
