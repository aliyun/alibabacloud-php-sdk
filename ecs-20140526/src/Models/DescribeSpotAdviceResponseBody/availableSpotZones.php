<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone;

class availableSpotZones extends Model
{
    /**
     * @var availableSpotZone[]
     */
    public $availableSpotZone;
    protected $_name = [
        'availableSpotZone' => 'AvailableSpotZone',
    ];

    public function validate()
    {
        if (\is_array($this->availableSpotZone)) {
            Model::validateArray($this->availableSpotZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSpotZone) {
            if (\is_array($this->availableSpotZone)) {
                $res['AvailableSpotZone'] = [];
                $n1 = 0;
                foreach ($this->availableSpotZone as $item1) {
                    $res['AvailableSpotZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableSpotZone'])) {
            if (!empty($map['AvailableSpotZone'])) {
                $model->availableSpotZone = [];
                $n1 = 0;
                foreach ($map['AvailableSpotZone'] as $item1) {
                    $model->availableSpotZone[$n1++] = availableSpotZone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
