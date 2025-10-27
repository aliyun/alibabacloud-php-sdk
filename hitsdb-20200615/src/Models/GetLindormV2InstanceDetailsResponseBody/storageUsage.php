<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class storageUsage extends Model
{
    /**
     * @var mixed[][]
     */
    public $capacityByDiskCategory;

    /**
     * @var mixed[]
     */
    public $engineUsage;
    protected $_name = [
        'capacityByDiskCategory' => 'CapacityByDiskCategory',
        'engineUsage' => 'EngineUsage',
    ];

    public function validate()
    {
        if (\is_array($this->capacityByDiskCategory)) {
            Model::validateArray($this->capacityByDiskCategory);
        }
        if (\is_array($this->engineUsage)) {
            Model::validateArray($this->engineUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityByDiskCategory) {
            if (\is_array($this->capacityByDiskCategory)) {
                $res['CapacityByDiskCategory'] = [];
                $n1 = 0;
                foreach ($this->capacityByDiskCategory as $item1) {
                    if (\is_array($item1)) {
                        $res['CapacityByDiskCategory'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['CapacityByDiskCategory'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->engineUsage) {
            if (\is_array($this->engineUsage)) {
                $res['EngineUsage'] = [];
                foreach ($this->engineUsage as $key1 => $value1) {
                    $res['EngineUsage'][$key1] = $value1;
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
        if (isset($map['CapacityByDiskCategory'])) {
            if (!empty($map['CapacityByDiskCategory'])) {
                $model->capacityByDiskCategory = [];
                $n1 = 0;
                foreach ($map['CapacityByDiskCategory'] as $item1) {
                    if (!empty($item1)) {
                        $model->capacityByDiskCategory[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->capacityByDiskCategory[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['EngineUsage'])) {
            if (!empty($map['EngineUsage'])) {
                $model->engineUsage = [];
                foreach ($map['EngineUsage'] as $key1 => $value1) {
                    $model->engineUsage[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
