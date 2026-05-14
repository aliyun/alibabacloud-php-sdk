<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetsResponseBody\data;

use AlibabaCloud\Dara\Model;

class cycleQuota extends Model
{
    /**
     * @var string
     */
    public $cyclePeriod;

    /**
     * @var string
     */
    public $quota;
    protected $_name = [
        'cyclePeriod' => 'CyclePeriod',
        'quota' => 'Quota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cyclePeriod) {
            $res['CyclePeriod'] = $this->cyclePeriod;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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
        if (isset($map['CyclePeriod'])) {
            $model->cyclePeriod = $map['CyclePeriod'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}
