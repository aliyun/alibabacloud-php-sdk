<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponseBody\data\dynamicRegClientIds;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $iotId;

    /**
     * @var dynamicRegClientIds[]
     */
    public $dynamicRegClientIds;
    protected $_name = [
        'iotId'               => 'IotId',
        'dynamicRegClientIds' => 'DynamicRegClientIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->dynamicRegClientIds) {
            $res['DynamicRegClientIds'] = [];
            if (null !== $this->dynamicRegClientIds && \is_array($this->dynamicRegClientIds)) {
                $n = 0;
                foreach ($this->dynamicRegClientIds as $item) {
                    $res['DynamicRegClientIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['DynamicRegClientIds'])) {
            if (!empty($map['DynamicRegClientIds'])) {
                $model->dynamicRegClientIds = [];
                $n                          = 0;
                foreach ($map['DynamicRegClientIds'] as $item) {
                    $model->dynamicRegClientIds[$n++] = null !== $item ? dynamicRegClientIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
