<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalServiceDataResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalServiceDataResponseBody\data\list_\serviceInfo;

class list_ extends Model
{
    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;
    protected $_name = [
        'serviceInfo' => 'ServiceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInfo)) {
            Model::validateArray($this->serviceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceInfo) {
            if (\is_array($this->serviceInfo)) {
                $res['ServiceInfo'] = [];
                $n1 = 0;
                foreach ($this->serviceInfo as $item1) {
                    $res['ServiceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceInfo'])) {
            if (!empty($map['ServiceInfo'])) {
                $model->serviceInfo = [];
                $n1 = 0;
                foreach ($map['ServiceInfo'] as $item1) {
                    $model->serviceInfo[$n1] = serviceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
