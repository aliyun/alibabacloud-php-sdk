<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody\firmwareInfo\simpleFirmwareInfo;
use AlibabaCloud\Tea\Model;

class firmwareInfo extends Model
{
    /**
     * @var simpleFirmwareInfo[]
     */
    public $simpleFirmwareInfo;
    protected $_name = [
        'simpleFirmwareInfo' => 'SimpleFirmwareInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleFirmwareInfo) {
            $res['SimpleFirmwareInfo'] = [];
            if (null !== $this->simpleFirmwareInfo && \is_array($this->simpleFirmwareInfo)) {
                $n = 0;
                foreach ($this->simpleFirmwareInfo as $item) {
                    $res['SimpleFirmwareInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firmwareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SimpleFirmwareInfo'])) {
            if (!empty($map['SimpleFirmwareInfo'])) {
                $model->simpleFirmwareInfo = [];
                $n                         = 0;
                foreach ($map['SimpleFirmwareInfo'] as $item) {
                    $model->simpleFirmwareInfo[$n++] = null !== $item ? simpleFirmwareInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
