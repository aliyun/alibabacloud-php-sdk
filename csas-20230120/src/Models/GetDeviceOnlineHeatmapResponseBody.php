<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class GetDeviceOnlineHeatmapResponseBody extends Model
{
    /**
     * @var int[][]
     */
    public $deviceOnlineHeatmap;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceOnlineHeatmap' => 'DeviceOnlineHeatmap',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceOnlineHeatmap)) {
            Model::validateArray($this->deviceOnlineHeatmap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceOnlineHeatmap) {
            if (\is_array($this->deviceOnlineHeatmap)) {
                $res['DeviceOnlineHeatmap'] = [];
                $n1 = 0;
                foreach ($this->deviceOnlineHeatmap as $item1) {
                    if (\is_array($item1)) {
                        $res['DeviceOnlineHeatmap'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['DeviceOnlineHeatmap'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeviceOnlineHeatmap'])) {
            if (!empty($map['DeviceOnlineHeatmap'])) {
                $model->deviceOnlineHeatmap = [];
                $n1 = 0;
                foreach ($map['DeviceOnlineHeatmap'] as $item1) {
                    if (!empty($item1)) {
                        $model->deviceOnlineHeatmap[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->deviceOnlineHeatmap[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
