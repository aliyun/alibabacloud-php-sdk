<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources\availableSpotResource;

class availableSpotResources extends Model
{
    /**
     * @var availableSpotResource[]
     */
    public $availableSpotResource;
    protected $_name = [
        'availableSpotResource' => 'AvailableSpotResource',
    ];

    public function validate()
    {
        if (\is_array($this->availableSpotResource)) {
            Model::validateArray($this->availableSpotResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSpotResource) {
            if (\is_array($this->availableSpotResource)) {
                $res['AvailableSpotResource'] = [];
                $n1 = 0;
                foreach ($this->availableSpotResource as $item1) {
                    $res['AvailableSpotResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableSpotResource'])) {
            if (!empty($map['AvailableSpotResource'])) {
                $model->availableSpotResource = [];
                $n1 = 0;
                foreach ($map['AvailableSpotResource'] as $item1) {
                    $model->availableSpotResource[$n1] = availableSpotResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
