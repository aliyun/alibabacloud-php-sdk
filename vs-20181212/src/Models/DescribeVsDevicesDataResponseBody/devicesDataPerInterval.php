<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody\devicesDataPerInterval\dataModule;
use AlibabaCloud\Tea\Model;

class devicesDataPerInterval extends Model
{
    /**
     * @var dataModule[]
     */
    public $dataModule;
    protected $_name = [
        'dataModule' => 'DataModule',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataModule) {
            $res['DataModule'] = [];
            if (null !== $this->dataModule && \is_array($this->dataModule)) {
                $n = 0;
                foreach ($this->dataModule as $item) {
                    $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devicesDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n = 0;
                foreach ($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
