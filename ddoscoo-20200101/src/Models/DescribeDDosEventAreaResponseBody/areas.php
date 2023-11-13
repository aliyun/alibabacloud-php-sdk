<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAreaResponseBody;

use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @description The code or ID of the source region. For more information, see [Codes of administrative regions in China and codes of countries and areas](~~167926~~). For example, **110000** indicates Beijing, China, and **us** indicates the United States.
     *
     * @example 110000
     *
     * @var string
     */
    public $area;

    /**
     * @description The number of request packets that were sent from the source region.
     *
     * @example 228
     *
     * @var int
     */
    public $inPkts;
    protected $_name = [
        'area'   => 'Area',
        'inPkts' => 'InPkts',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return areas
     */
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
