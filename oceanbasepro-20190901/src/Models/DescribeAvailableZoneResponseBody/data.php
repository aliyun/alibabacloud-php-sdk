<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones;

class data extends Model
{
    /**
     * @var availableZones[]
     */
    public $availableZones;
    protected $_name = [
        'availableZones' => 'AvailableZones',
    ];

    public function validate()
    {
        if (\is_array($this->availableZones)) {
            Model::validateArray($this->availableZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            if (\is_array($this->availableZones)) {
                $res['AvailableZones'] = [];
                $n1 = 0;
                foreach ($this->availableZones as $item1) {
                    $res['AvailableZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = [];
                $n1 = 0;
                foreach ($map['AvailableZones'] as $item1) {
                    $model->availableZones[$n1] = availableZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
