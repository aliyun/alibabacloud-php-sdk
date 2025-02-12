<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\light;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\nuclear;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\renewing;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\urban;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\water;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\wind;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponseBody\data\zero;

class data extends Model
{
    /**
     * @var light[]
     */
    public $light;
    /**
     * @var nuclear[]
     */
    public $nuclear;
    /**
     * @var renewing[]
     */
    public $renewing;
    /**
     * @var urban[]
     */
    public $urban;
    /**
     * @var water[]
     */
    public $water;
    /**
     * @var wind[]
     */
    public $wind;
    /**
     * @var zero[]
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
        if (\is_array($this->light)) {
            Model::validateArray($this->light);
        }
        if (\is_array($this->nuclear)) {
            Model::validateArray($this->nuclear);
        }
        if (\is_array($this->renewing)) {
            Model::validateArray($this->renewing);
        }
        if (\is_array($this->urban)) {
            Model::validateArray($this->urban);
        }
        if (\is_array($this->water)) {
            Model::validateArray($this->water);
        }
        if (\is_array($this->wind)) {
            Model::validateArray($this->wind);
        }
        if (\is_array($this->zero)) {
            Model::validateArray($this->zero);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->light) {
            if (\is_array($this->light)) {
                $res['light'] = [];
                $n1           = 0;
                foreach ($this->light as $item1) {
                    $res['light'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nuclear) {
            if (\is_array($this->nuclear)) {
                $res['nuclear'] = [];
                $n1             = 0;
                foreach ($this->nuclear as $item1) {
                    $res['nuclear'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->renewing) {
            if (\is_array($this->renewing)) {
                $res['renewing'] = [];
                $n1              = 0;
                foreach ($this->renewing as $item1) {
                    $res['renewing'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->urban) {
            if (\is_array($this->urban)) {
                $res['urban'] = [];
                $n1           = 0;
                foreach ($this->urban as $item1) {
                    $res['urban'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->water) {
            if (\is_array($this->water)) {
                $res['water'] = [];
                $n1           = 0;
                foreach ($this->water as $item1) {
                    $res['water'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wind) {
            if (\is_array($this->wind)) {
                $res['wind'] = [];
                $n1          = 0;
                foreach ($this->wind as $item1) {
                    $res['wind'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zero) {
            if (\is_array($this->zero)) {
                $res['zero'] = [];
                $n1          = 0;
                foreach ($this->zero as $item1) {
                    $res['zero'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['light'])) {
            if (!empty($map['light'])) {
                $model->light = [];
                $n1           = 0;
                foreach ($map['light'] as $item1) {
                    $model->light[$n1++] = light::fromMap($item1);
                }
            }
        }

        if (isset($map['nuclear'])) {
            if (!empty($map['nuclear'])) {
                $model->nuclear = [];
                $n1             = 0;
                foreach ($map['nuclear'] as $item1) {
                    $model->nuclear[$n1++] = nuclear::fromMap($item1);
                }
            }
        }

        if (isset($map['renewing'])) {
            if (!empty($map['renewing'])) {
                $model->renewing = [];
                $n1              = 0;
                foreach ($map['renewing'] as $item1) {
                    $model->renewing[$n1++] = renewing::fromMap($item1);
                }
            }
        }

        if (isset($map['urban'])) {
            if (!empty($map['urban'])) {
                $model->urban = [];
                $n1           = 0;
                foreach ($map['urban'] as $item1) {
                    $model->urban[$n1++] = urban::fromMap($item1);
                }
            }
        }

        if (isset($map['water'])) {
            if (!empty($map['water'])) {
                $model->water = [];
                $n1           = 0;
                foreach ($map['water'] as $item1) {
                    $model->water[$n1++] = water::fromMap($item1);
                }
            }
        }

        if (isset($map['wind'])) {
            if (!empty($map['wind'])) {
                $model->wind = [];
                $n1          = 0;
                foreach ($map['wind'] as $item1) {
                    $model->wind[$n1++] = wind::fromMap($item1);
                }
            }
        }

        if (isset($map['zero'])) {
            if (!empty($map['zero'])) {
                $model->zero = [];
                $n1          = 0;
                foreach ($map['zero'] as $item1) {
                    $model->zero[$n1++] = zero::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
