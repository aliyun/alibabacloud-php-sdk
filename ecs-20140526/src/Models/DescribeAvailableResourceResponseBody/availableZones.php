<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;

class availableZones extends Model
{
    /**
     * @var availableZone[]
     */
    public $availableZone;
    protected $_name = [
        'availableZone' => 'AvailableZone',
    ];

    public function validate()
    {
        if (\is_array($this->availableZone)) {
            Model::validateArray($this->availableZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZone) {
            if (\is_array($this->availableZone)) {
                $res['AvailableZone'] = [];
                $n1 = 0;
                foreach ($this->availableZone as $item1) {
                    $res['AvailableZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableZone'])) {
            if (!empty($map['AvailableZone'])) {
                $model->availableZone = [];
                $n1 = 0;
                foreach ($map['AvailableZone'] as $item1) {
                    $model->availableZone[$n1++] = availableZone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
