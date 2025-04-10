<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsResponseBody\layer7InstanceRelations;

class DescribleLayer7InstanceRelationsResponseBody extends Model
{
    /**
     * @var layer7InstanceRelations[]
     */
    public $layer7InstanceRelations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layer7InstanceRelations' => 'Layer7InstanceRelations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->layer7InstanceRelations)) {
            Model::validateArray($this->layer7InstanceRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layer7InstanceRelations) {
            if (\is_array($this->layer7InstanceRelations)) {
                $res['Layer7InstanceRelations'] = [];
                $n1 = 0;
                foreach ($this->layer7InstanceRelations as $item1) {
                    $res['Layer7InstanceRelations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Layer7InstanceRelations'])) {
            if (!empty($map['Layer7InstanceRelations'])) {
                $model->layer7InstanceRelations = [];
                $n1 = 0;
                foreach ($map['Layer7InstanceRelations'] as $item1) {
                    $model->layer7InstanceRelations[$n1++] = layer7InstanceRelations::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
