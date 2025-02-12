<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponseBody;

use AlibabaCloud\Dara\Model;

class areas extends Model
{
    /**
     * @var string
     */
    public $area;
    /**
     * @var int
     */
    public $inPkts;
    protected $_name = [
        'area'   => 'Area',
        'inPkts' => 'InPkts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }

        return $model;
    }
}
