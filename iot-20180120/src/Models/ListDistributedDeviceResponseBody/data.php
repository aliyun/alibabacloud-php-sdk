<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponseBody\data\info;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the device.
     *
     * @var info
     */
    public $info;

    /**
     * @description The total number of returned devices.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'info'  => 'Info',
        'total' => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
