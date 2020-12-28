<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\extendedAttribute\inactiveDisks;
use AlibabaCloud\Tea\Model;

class extendedAttribute extends Model
{
    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var inactiveDisks[]
     */
    public $inactiveDisks;
    protected $_name = [
        'device'        => 'Device',
        'diskId'        => 'DiskId',
        'inactiveDisks' => 'InactiveDisks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->inactiveDisks) {
            $res['InactiveDisks'] = [];
            if (null !== $this->inactiveDisks && \is_array($this->inactiveDisks)) {
                $n = 0;
                foreach ($this->inactiveDisks as $item) {
                    $res['InactiveDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InactiveDisks'])) {
            if (!empty($map['InactiveDisks'])) {
                $model->inactiveDisks = [];
                $n                    = 0;
                foreach ($map['InactiveDisks'] as $item) {
                    $model->inactiveDisks[$n++] = null !== $item ? inactiveDisks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
