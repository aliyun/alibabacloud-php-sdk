<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponseBody;

use AlibabaCloud\Tea\Model;

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
        'inPkts'     => 'InPkts',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return attackTypes
     */
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
