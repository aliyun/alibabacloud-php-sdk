<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponseBody;

use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @var int
     */
    public $inPkts;

    /**
     * @var string
     */
    public $area;
    protected $_name = [
        'inPkts' => 'InPkts',
        'area'   => 'Area',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        return $model;
    }
}
