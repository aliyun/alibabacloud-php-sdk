<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByTagsResponseBody\data\simpleDeviceInfo;

class data extends Model
{
    /**
     * @var simpleDeviceInfo[]
     */
    public $simpleDeviceInfo;
    protected $_name = [
        'simpleDeviceInfo' => 'SimpleDeviceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->simpleDeviceInfo)) {
            Model::validateArray($this->simpleDeviceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleDeviceInfo) {
            if (\is_array($this->simpleDeviceInfo)) {
                $res['SimpleDeviceInfo'] = [];
                $n1 = 0;
                foreach ($this->simpleDeviceInfo as $item1) {
                    $res['SimpleDeviceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SimpleDeviceInfo'])) {
            if (!empty($map['SimpleDeviceInfo'])) {
                $model->simpleDeviceInfo = [];
                $n1 = 0;
                foreach ($map['SimpleDeviceInfo'] as $item1) {
                    $model->simpleDeviceInfo[$n1] = simpleDeviceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
