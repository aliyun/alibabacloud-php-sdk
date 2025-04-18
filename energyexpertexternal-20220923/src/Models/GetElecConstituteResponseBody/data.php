<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\light;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\nuclear;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\renewing;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\urban;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\water;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\wind;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponseBody\data\zero;

class data extends Model
{
    /**
     * @var light
     */
    public $light;

    /**
     * @var nuclear
     */
    public $nuclear;

    /**
     * @var renewing
     */
    public $renewing;

    /**
     * @var urban
     */
    public $urban;

    /**
     * @var water
     */
    public $water;

    /**
     * @var wind
     */
    public $wind;

    /**
     * @var zero
     */
    public $zero;
    protected $_name = [
        'light' => 'light',
        'nuclear' => 'nuclear',
        'renewing' => 'renewing',
        'urban' => 'urban',
        'water' => 'water',
        'wind' => 'wind',
        'zero' => 'zero',
    ];

    public function validate()
    {
        if (null !== $this->light) {
            $this->light->validate();
        }
        if (null !== $this->nuclear) {
            $this->nuclear->validate();
        }
        if (null !== $this->renewing) {
            $this->renewing->validate();
        }
        if (null !== $this->urban) {
            $this->urban->validate();
        }
        if (null !== $this->water) {
            $this->water->validate();
        }
        if (null !== $this->wind) {
            $this->wind->validate();
        }
        if (null !== $this->zero) {
            $this->zero->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->light) {
            $res['light'] = null !== $this->light ? $this->light->toArray($noStream) : $this->light;
        }

        if (null !== $this->nuclear) {
            $res['nuclear'] = null !== $this->nuclear ? $this->nuclear->toArray($noStream) : $this->nuclear;
        }

        if (null !== $this->renewing) {
            $res['renewing'] = null !== $this->renewing ? $this->renewing->toArray($noStream) : $this->renewing;
        }

        if (null !== $this->urban) {
            $res['urban'] = null !== $this->urban ? $this->urban->toArray($noStream) : $this->urban;
        }

        if (null !== $this->water) {
            $res['water'] = null !== $this->water ? $this->water->toArray($noStream) : $this->water;
        }

        if (null !== $this->wind) {
            $res['wind'] = null !== $this->wind ? $this->wind->toArray($noStream) : $this->wind;
        }

        if (null !== $this->zero) {
            $res['zero'] = null !== $this->zero ? $this->zero->toArray($noStream) : $this->zero;
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
