<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data\list_\desiredPropertyInfo;

class list_ extends Model
{
    /**
     * @var desiredPropertyInfo[]
     */
    public $desiredPropertyInfo;
    protected $_name = [
        'desiredPropertyInfo' => 'DesiredPropertyInfo',
    ];

    public function validate()
    {
        if (\is_array($this->desiredPropertyInfo)) {
            Model::validateArray($this->desiredPropertyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desiredPropertyInfo) {
            if (\is_array($this->desiredPropertyInfo)) {
                $res['DesiredPropertyInfo'] = [];
                $n1 = 0;
                foreach ($this->desiredPropertyInfo as $item1) {
                    $res['DesiredPropertyInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DesiredPropertyInfo'])) {
            if (!empty($map['DesiredPropertyInfo'])) {
                $model->desiredPropertyInfo = [];
                $n1 = 0;
                foreach ($map['DesiredPropertyInfo'] as $item1) {
                    $model->desiredPropertyInfo[$n1] = desiredPropertyInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
