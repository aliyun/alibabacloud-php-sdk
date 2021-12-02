<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPhysicalConnectionFeaturesResponseBody\physicalConnectionFeatures;
use AlibabaCloud\Tea\Model;

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
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionFeatures) {
            $res['PhysicalConnectionFeatures'] = [];
            if (null !== $this->physicalConnectionFeatures && \is_array($this->physicalConnectionFeatures)) {
                $n = 0;
                foreach ($this->physicalConnectionFeatures as $item) {
                    $res['PhysicalConnectionFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPhysicalConnectionFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionFeatures'])) {
            if (!empty($map['PhysicalConnectionFeatures'])) {
                $model->physicalConnectionFeatures = [];
                $n                                 = 0;
                foreach ($map['PhysicalConnectionFeatures'] as $item) {
                    $model->physicalConnectionFeatures[$n++] = null !== $item ? physicalConnectionFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
