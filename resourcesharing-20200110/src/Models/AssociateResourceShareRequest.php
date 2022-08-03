<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest\resources;
use AlibabaCloud\Tea\Model;

class AssociateResourceShareRequest extends Model
{
    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string[]
     */
    public $targets;
    protected $_name = [
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
     * @return AssociateResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
