<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateFeature;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\apps\usages;

class apps extends Model
{
    /**
     * @var PriceEstimateFeature
     */
    public $feature;

    /**
     * @var int
     */
    public $id;

    /**
     * @var usages[]
     */
    public $usages;
    protected $_name = [
        'feature' => 'Feature',
        'id' => 'Id',
        'usages' => 'Usages',
    ];

    public function validate()
    {
        if (null !== $this->feature) {
            $this->feature->validate();
        }
        if (\is_array($this->usages)) {
            Model::validateArray($this->usages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toArray($noStream) : $this->feature;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->usages) {
            if (\is_array($this->usages)) {
                $res['Usages'] = [];
                $n1 = 0;
                foreach ($this->usages as $item1) {
                    $res['Usages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Feature'])) {
            $model->feature = PriceEstimateFeature::fromMap($map['Feature']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Usages'])) {
            if (!empty($map['Usages'])) {
                $model->usages = [];
                $n1 = 0;
                foreach ($map['Usages'] as $item1) {
                    $model->usages[$n1] = usages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
