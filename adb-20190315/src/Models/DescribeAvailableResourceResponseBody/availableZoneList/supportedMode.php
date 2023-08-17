<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;
use AlibabaCloud\Tea\Model;

class supportedMode extends Model
{
    /**
     * @description N/A
     *
     * @example flexible
     *
     * @var string
     */
    public $mode;

    /**
     * @description The available elastic I/O units (EIUs).
     *
     * @var supportedSerialList[]
     */
    public $supportedSerialList;
    protected $_name = [
        'mode'                => 'Mode',
        'supportedSerialList' => 'SupportedSerialList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->supportedSerialList) {
            $res['SupportedSerialList'] = [];
            if (null !== $this->supportedSerialList && \is_array($this->supportedSerialList)) {
                $n = 0;
                foreach ($this->supportedSerialList as $item) {
                    $res['SupportedSerialList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SupportedSerialList'])) {
            if (!empty($map['SupportedSerialList'])) {
                $model->supportedSerialList = [];
                $n                          = 0;
                foreach ($map['SupportedSerialList'] as $item) {
                    $model->supportedSerialList[$n++] = null !== $item ? supportedSerialList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
