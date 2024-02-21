<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial;
use AlibabaCloud\Tea\Model;

class supportedSerialList extends Model
{
    /**
     * @var supportedSerial[]
     */
    public $supportedSerial;
    protected $_name = [
        'supportedSerial' => 'SupportedSerial',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSerial) {
            $res['SupportedSerial'] = [];
            if (null !== $this->supportedSerial && \is_array($this->supportedSerial)) {
                $n = 0;
                foreach ($this->supportedSerial as $item) {
                    $res['SupportedSerial'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSerialList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedSerial'])) {
            if (!empty($map['SupportedSerial'])) {
                $model->supportedSerial = [];
                $n                      = 0;
                foreach ($map['SupportedSerial'] as $item) {
                    $model->supportedSerial[$n++] = null !== $item ? supportedSerial::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
