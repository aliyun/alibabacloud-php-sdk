<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareRequest\resources;
use AlibabaCloud\Tea\Model;

class DisassociateResourceShareRequest extends Model
{
    /**
     * @description The information of the entities that are associated with the resource share.
     *
     * @example Self
     *
     * @var string
     */
    public $resourceOwner;

    /**
     * @description The ID of a shared resource.
     *
     * >  Resources.N.ResourceId and Resources.N.ResourceType must be used in pairs.
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @example 172050525300****
     *
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'resourceOwner'   => 'ResourceOwner',
        'resourceShareId' => 'ResourceShareId',
        'resources'       => 'Resources',
        'targets'         => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisassociateResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }

        return $model;
    }
}
