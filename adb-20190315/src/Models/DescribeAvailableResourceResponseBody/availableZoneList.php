<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;
use AlibabaCloud\Tea\Model;

class availableZoneList extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var supportedMode[]
     */
    public $supportedMode;
    protected $_name = [
        'zoneId'        => 'ZoneId',
        'supportedMode' => 'SupportedMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->supportedMode) {
            $res['SupportedMode'] = [];
            if (null !== $this->supportedMode && \is_array($this->supportedMode)) {
                $n = 0;
                foreach ($this->supportedMode as $item) {
                    $res['SupportedMode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZoneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SupportedMode'])) {
            if (!empty($map['SupportedMode'])) {
                $model->supportedMode = [];
                $n                    = 0;
                foreach ($map['SupportedMode'] as $item) {
                    $model->supportedMode[$n++] = null !== $item ? supportedMode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
