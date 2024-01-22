<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput;

use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateFeature;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\apps\usages;
use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var PriceEstimateFeature
     */
    public $feature;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var usages[]
     */
    public $usages;
    protected $_name = [
        'feature' => 'Feature',
        'id'      => 'Id',
        'usages'  => 'Usages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->usages) {
            $res['Usages'] = [];
            if (null !== $this->usages && \is_array($this->usages)) {
                $n = 0;
                foreach ($this->usages as $item) {
                    $res['Usages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
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
                $n             = 0;
                foreach ($map['Usages'] as $item) {
                    $model->usages[$n++] = null !== $item ? usages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
