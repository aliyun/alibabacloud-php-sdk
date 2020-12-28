<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfResourceResponseBody\data\datas;

use AlibabaCloud\Tea\Model;

class paramFlowItemList extends Model
{
    /**
     * @var string
     */
    public $itemValue;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'itemValue' => 'ItemValue',
        'itemType'  => 'ItemType',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramFlowItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
