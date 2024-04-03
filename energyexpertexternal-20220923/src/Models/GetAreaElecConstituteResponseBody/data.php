<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetAreaElecConstituteResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\CarbonEmissionElecSummaryItem;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Photoelectric power consumption and carbon emission data of each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $light;

    /**
     * @description Data on nuclear power consumption and carbon emissions at each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $nuclear;

    /**
     * @description Data on renewable electricity consumption and carbon emissions at each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $renewing;

    /**
     * @description Data on mains electricity consumption and carbon emission of each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $urban;

    /**
     * @description Hydropower consumption and carbon emission data of each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $water;

    /**
     * @description Wind power consumption and carbon emission data of each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $wind;

    /**
     * @description Data of zero electricity consumption and carbon emission of each enterprise.
     *
     * @var CarbonEmissionElecSummaryItem[]
     */
    public $zero;
    protected $_name = [
        'light'    => 'light',
        'nuclear'  => 'nuclear',
        'renewing' => 'renewing',
        'urban'    => 'urban',
        'water'    => 'water',
        'wind'     => 'wind',
        'zero'     => 'zero',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->light) {
            $res['light'] = [];
            if (null !== $this->light && \is_array($this->light)) {
                $n = 0;
                foreach ($this->light as $item) {
                    $res['light'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nuclear) {
            $res['nuclear'] = [];
            if (null !== $this->nuclear && \is_array($this->nuclear)) {
                $n = 0;
                foreach ($this->nuclear as $item) {
                    $res['nuclear'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renewing) {
            $res['renewing'] = [];
            if (null !== $this->renewing && \is_array($this->renewing)) {
                $n = 0;
                foreach ($this->renewing as $item) {
                    $res['renewing'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->urban) {
            $res['urban'] = [];
            if (null !== $this->urban && \is_array($this->urban)) {
                $n = 0;
                foreach ($this->urban as $item) {
                    $res['urban'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->water) {
            $res['water'] = [];
            if (null !== $this->water && \is_array($this->water)) {
                $n = 0;
                foreach ($this->water as $item) {
                    $res['water'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wind) {
            $res['wind'] = [];
            if (null !== $this->wind && \is_array($this->wind)) {
                $n = 0;
                foreach ($this->wind as $item) {
                    $res['wind'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zero) {
            $res['zero'] = [];
            if (null !== $this->zero && \is_array($this->zero)) {
                $n = 0;
                foreach ($this->zero as $item) {
                    $res['zero'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['light'])) {
            if (!empty($map['light'])) {
                $model->light = [];
                $n            = 0;
                foreach ($map['light'] as $item) {
                    $model->light[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nuclear'])) {
            if (!empty($map['nuclear'])) {
                $model->nuclear = [];
                $n              = 0;
                foreach ($map['nuclear'] as $item) {
                    $model->nuclear[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['renewing'])) {
            if (!empty($map['renewing'])) {
                $model->renewing = [];
                $n               = 0;
                foreach ($map['renewing'] as $item) {
                    $model->renewing[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['urban'])) {
            if (!empty($map['urban'])) {
                $model->urban = [];
                $n            = 0;
                foreach ($map['urban'] as $item) {
                    $model->urban[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['water'])) {
            if (!empty($map['water'])) {
                $model->water = [];
                $n            = 0;
                foreach ($map['water'] as $item) {
                    $model->water[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['wind'])) {
            if (!empty($map['wind'])) {
                $model->wind = [];
                $n           = 0;
                foreach ($map['wind'] as $item) {
                    $model->wind[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['zero'])) {
            if (!empty($map['zero'])) {
                $model->zero = [];
                $n           = 0;
                foreach ($map['zero'] as $item) {
                    $model->zero[$n++] = null !== $item ? CarbonEmissionElecSummaryItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
