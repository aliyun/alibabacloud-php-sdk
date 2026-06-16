<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\InitSasModuleRuleRequest\instances;

class InitSasModuleRuleRequest extends Model
{
    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var bool
     */
    public $isTrial;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoBind' => 'AutoBind',
        'instances' => 'Instances',
        'isTrial' => 'IsTrial',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
