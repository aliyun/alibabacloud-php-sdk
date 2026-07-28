<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\silentPeriodConfig\silentPeriods;

class silentPeriodConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var silentPeriods[]
     */
    public $silentPeriods;
    protected $_name = [
        'enabled' => 'enabled',
        'silentPeriods' => 'silentPeriods',
    ];

    public function validate()
    {
        if (\is_array($this->silentPeriods)) {
            Model::validateArray($this->silentPeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->silentPeriods) {
            if (\is_array($this->silentPeriods)) {
                $res['silentPeriods'] = [];
                $n1 = 0;
                foreach ($this->silentPeriods as $item1) {
                    $res['silentPeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['silentPeriods'])) {
            if (!empty($map['silentPeriods'])) {
                $model->silentPeriods = [];
                $n1 = 0;
                foreach ($map['silentPeriods'] as $item1) {
                    $model->silentPeriods[$n1] = silentPeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
