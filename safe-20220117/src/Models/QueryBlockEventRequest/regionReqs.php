<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventRequest;

use AlibabaCloud\Dara\Model;

class regionReqs extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string[]
     */
    public $regions;
    protected $_name = [
        'productCode' => 'ProductCode',
        'regions' => 'Regions',
    ];

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
