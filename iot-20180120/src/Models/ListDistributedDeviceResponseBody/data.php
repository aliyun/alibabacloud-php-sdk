<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedDeviceResponseBody\data\info;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var info
     */
    public $info;
    protected $_name = [
        'total' => 'Total',
        'info'  => 'Info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }

        return $model;
    }
}
