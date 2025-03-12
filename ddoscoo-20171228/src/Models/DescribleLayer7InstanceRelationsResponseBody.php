<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsResponseBody\layer7InstanceRelations;
use AlibabaCloud\Tea\Model;

class DescribleLayer7InstanceRelationsResponseBody extends Model
{
    /**
     * @var layer7InstanceRelations[]
     */
    public $layer7InstanceRelations;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layer7InstanceRelations' => 'Layer7InstanceRelations',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layer7InstanceRelations) {
            $res['Layer7InstanceRelations'] = [];
            if (null !== $this->layer7InstanceRelations && \is_array($this->layer7InstanceRelations)) {
                $n = 0;
                foreach ($this->layer7InstanceRelations as $item) {
                    $res['Layer7InstanceRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribleLayer7InstanceRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layer7InstanceRelations'])) {
            if (!empty($map['Layer7InstanceRelations'])) {
                $model->layer7InstanceRelations = [];
                $n                              = 0;
                foreach ($map['Layer7InstanceRelations'] as $item) {
                    $model->layer7InstanceRelations[$n++] = null !== $item ? layer7InstanceRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
