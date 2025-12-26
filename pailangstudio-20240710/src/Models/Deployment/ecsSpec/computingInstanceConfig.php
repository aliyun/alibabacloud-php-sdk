<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\ecsSpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\ecsSpec\computingInstanceConfig\computingInstances;

class computingInstanceConfig extends Model
{
    /**
     * @var computingInstances[]
     */
    public $computingInstances;

    /**
     * @var bool
     */
    public $disableSpotProtectionPeriod;
    protected $_name = [
        'computingInstances' => 'ComputingInstances',
        'disableSpotProtectionPeriod' => 'DisableSpotProtectionPeriod',
    ];

    public function validate()
    {
        if (\is_array($this->computingInstances)) {
            Model::validateArray($this->computingInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computingInstances) {
            if (\is_array($this->computingInstances)) {
                $res['ComputingInstances'] = [];
                $n1 = 0;
                foreach ($this->computingInstances as $item1) {
                    $res['ComputingInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->disableSpotProtectionPeriod) {
            $res['DisableSpotProtectionPeriod'] = $this->disableSpotProtectionPeriod;
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
        if (isset($map['ComputingInstances'])) {
            if (!empty($map['ComputingInstances'])) {
                $model->computingInstances = [];
                $n1 = 0;
                foreach ($map['ComputingInstances'] as $item1) {
                    $model->computingInstances[$n1] = computingInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisableSpotProtectionPeriod'])) {
            $model->disableSpotProtectionPeriod = $map['DisableSpotProtectionPeriod'];
        }

        return $model;
    }
}
