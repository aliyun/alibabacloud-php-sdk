<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponseBody;

use AlibabaCloud\Dara\Model;

class attackTypes extends Model
{
    /**
     * @var string
     */
    public $attackType;

    /**
     * @var int
     */
    public $inPkts;
    protected $_name = [
        'attackType' => 'AttackType',
        'inPkts' => 'InPkts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
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
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }

        return $model;
    }
}
