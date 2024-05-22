<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePlanogramRailsResponseBody;

use AlibabaCloud\Tea\Model;

class planogramRailInfos extends Model
{
    /**
     * @var int
     */
    public $gapUnit;

    /**
     * @var string
     */
    public $layer;

    /**
     * @var string
     */
    public $railCode;

    /**
     * @var string
     */
    public $shelf;
    protected $_name = [
        'gapUnit'  => 'GapUnit',
        'layer'    => 'Layer',
        'railCode' => 'RailCode',
        'shelf'    => 'Shelf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gapUnit) {
            $res['GapUnit'] = $this->gapUnit;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->railCode) {
            $res['RailCode'] = $this->railCode;
        }
        if (null !== $this->shelf) {
            $res['Shelf'] = $this->shelf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planogramRailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GapUnit'])) {
            $model->gapUnit = $map['GapUnit'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['RailCode'])) {
            $model->railCode = $map['RailCode'];
        }
        if (isset($map['Shelf'])) {
            $model->shelf = $map['Shelf'];
        }

        return $model;
    }
}
