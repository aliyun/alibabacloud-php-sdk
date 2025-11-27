<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class EnableServicesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $serviceNames;
    protected $_name = [
        'regionId' => 'RegionId',
        'serviceNames' => 'ServiceNames',
    ];

    public function validate()
    {
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['ServiceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['ServiceNames'][$n1] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceNames'])) {
            if (!empty($map['ServiceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['ServiceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
