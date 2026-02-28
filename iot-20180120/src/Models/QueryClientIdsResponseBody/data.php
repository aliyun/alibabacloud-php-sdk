<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponseBody\data\dynamicRegClientIds;

class data extends Model
{
    /**
     * @var dynamicRegClientIds[]
     */
    public $dynamicRegClientIds;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'dynamicRegClientIds' => 'DynamicRegClientIds',
        'iotId' => 'IotId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicRegClientIds)) {
            Model::validateArray($this->dynamicRegClientIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicRegClientIds) {
            if (\is_array($this->dynamicRegClientIds)) {
                $res['DynamicRegClientIds'] = [];
                $n1 = 0;
                foreach ($this->dynamicRegClientIds as $item1) {
                    $res['DynamicRegClientIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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
        if (isset($map['DynamicRegClientIds'])) {
            if (!empty($map['DynamicRegClientIds'])) {
                $model->dynamicRegClientIds = [];
                $n1 = 0;
                foreach ($map['DynamicRegClientIds'] as $item1) {
                    $model->dynamicRegClientIds[$n1] = dynamicRegClientIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
