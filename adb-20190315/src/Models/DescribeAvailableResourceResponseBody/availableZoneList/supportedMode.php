<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;
use AlibabaCloud\Tea\Model;

class supportedMode extends Model
{
    /**
     * @var supportedSerialList[]
     */
    public $supportedSerialList;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'supportedSerialList' => 'SupportedSerialList',
        'mode'                => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSerialList) {
            $res['SupportedSerialList'] = [];
            if (null !== $this->supportedSerialList && \is_array($this->supportedSerialList)) {
                $n = 0;
                foreach ($this->supportedSerialList as $item) {
                    $res['SupportedSerialList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedMode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedSerialList'])) {
            if (!empty($map['SupportedSerialList'])) {
                $model->supportedSerialList = [];
                $n                          = 0;
                foreach ($map['SupportedSerialList'] as $item) {
                    $model->supportedSerialList[$n++] = null !== $item ? supportedSerialList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
