<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody\routeEntries\routePublishTargets;

class routeEntries extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $routeEntryId;

    /**
     * @var routePublishTargets[]
     */
    public $routePublishTargets;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'routeEntryId' => 'RouteEntryId',
        'routePublishTargets' => 'RoutePublishTargets',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->routePublishTargets)) {
            Model::validateArray($this->routePublishTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        if (null !== $this->routePublishTargets) {
            if (\is_array($this->routePublishTargets)) {
                $res['RoutePublishTargets'] = [];
                $n1 = 0;
                foreach ($this->routePublishTargets as $item1) {
                    $res['RoutePublishTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        if (isset($map['RoutePublishTargets'])) {
            if (!empty($map['RoutePublishTargets'])) {
                $model->routePublishTargets = [];
                $n1 = 0;
                foreach ($map['RoutePublishTargets'] as $item1) {
                    $model->routePublishTargets[$n1] = routePublishTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
