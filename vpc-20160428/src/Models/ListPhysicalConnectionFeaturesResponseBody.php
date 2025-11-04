<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesResponseBody\physicalConnectionFeatures;

class ListPhysicalConnectionFeaturesResponseBody extends Model
{
    /**
     * @var physicalConnectionFeatures[]
     */
    public $physicalConnectionFeatures;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'physicalConnectionFeatures' => 'PhysicalConnectionFeatures',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->physicalConnectionFeatures)) {
            Model::validateArray($this->physicalConnectionFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->physicalConnectionFeatures) {
            if (\is_array($this->physicalConnectionFeatures)) {
                $res['PhysicalConnectionFeatures'] = [];
                $n1 = 0;
                foreach ($this->physicalConnectionFeatures as $item1) {
                    $res['PhysicalConnectionFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PhysicalConnectionFeatures'])) {
            if (!empty($map['PhysicalConnectionFeatures'])) {
                $model->physicalConnectionFeatures = [];
                $n1 = 0;
                foreach ($map['PhysicalConnectionFeatures'] as $item1) {
                    $model->physicalConnectionFeatures[$n1] = physicalConnectionFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
