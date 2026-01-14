<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorRequest\ddosConfigList;

class AttachDdosToAcceleratorRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var ddosConfigList[]
     */
    public $ddosConfigList;

    /**
     * @var string
     */
    public $ddosId;

    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'ddosConfigList' => 'DdosConfigList',
        'ddosId' => 'DdosId',
        'ddosRegionId' => 'DdosRegionId',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ddosConfigList)) {
            Model::validateArray($this->ddosConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->ddosConfigList) {
            if (\is_array($this->ddosConfigList)) {
                $res['DdosConfigList'] = [];
                $n1 = 0;
                foreach ($this->ddosConfigList as $item1) {
                    $res['DdosConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }

        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['DdosConfigList'])) {
            if (!empty($map['DdosConfigList'])) {
                $model->ddosConfigList = [];
                $n1 = 0;
                foreach ($map['DdosConfigList'] as $item1) {
                    $model->ddosConfigList[$n1] = ddosConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }

        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
