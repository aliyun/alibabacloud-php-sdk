<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\light;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\nuclear;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\renewing;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\urban;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\water;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\wind;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\zero;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Photoelectric power consumption and carbon emission data of each enterprise.
     *
     * @var light
     */
    public $light;

    /**
     * @description Data on nuclear power consumption and carbon emissions at each enterprise.
     *
     * @var nuclear
     */
    public $nuclear;

    /**
     * @description Data on renewable electricity consumption and carbon emissions at each enterprise.
     *
     * @var renewing
     */
    public $renewing;

    /**
     * @description Data on mains power electricity consumption and carbon emission of each enterprise.
     *
     * @var urban
     */
    public $urban;

    /**
     * @description Hydropower consumption and carbon emission data of each enterprise.
     *
     * @var water
     */
    public $water;

    /**
     * @description Wind power consumption and carbon emission data of each enterprise.
     *
     * @var wind
     */
    public $wind;

    /**
     * @description Data of zero electricity consumption and carbon emission of each enterprise.
     *
     * @var zero
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
            $res['light'] = null !== $this->light ? $this->light->toMap() : null;
        }
        if (null !== $this->nuclear) {
            $res['nuclear'] = null !== $this->nuclear ? $this->nuclear->toMap() : null;
        }
        if (null !== $this->renewing) {
            $res['renewing'] = null !== $this->renewing ? $this->renewing->toMap() : null;
        }
        if (null !== $this->urban) {
            $res['urban'] = null !== $this->urban ? $this->urban->toMap() : null;
        }
        if (null !== $this->water) {
            $res['water'] = null !== $this->water ? $this->water->toMap() : null;
        }
        if (null !== $this->wind) {
            $res['wind'] = null !== $this->wind ? $this->wind->toMap() : null;
        }
        if (null !== $this->zero) {
            $res['zero'] = null !== $this->zero ? $this->zero->toMap() : null;
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
            $model->light = light::fromMap($map['light']);
        }
        if (isset($map['nuclear'])) {
            $model->nuclear = nuclear::fromMap($map['nuclear']);
        }
        if (isset($map['renewing'])) {
            $model->renewing = renewing::fromMap($map['renewing']);
        }
        if (isset($map['urban'])) {
            $model->urban = urban::fromMap($map['urban']);
        }
        if (isset($map['water'])) {
            $model->water = water::fromMap($map['water']);
        }
        if (isset($map['wind'])) {
            $model->wind = wind::fromMap($map['wind']);
        }
        if (isset($map['zero'])) {
            $model->zero = zero::fromMap($map['zero']);
        }

        return $model;
    }
}
