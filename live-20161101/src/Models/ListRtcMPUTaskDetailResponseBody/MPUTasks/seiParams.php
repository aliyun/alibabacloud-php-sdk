<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;

use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams\layoutVolume;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams\passThrough;
use AlibabaCloud\Tea\Model;

class seiParams extends Model
{
    /**
     * @description The layout and volume SEI. If the return value is an empty string, the default layout and volume SEI is used.
     *
     * @var layoutVolume
     */
    public $layoutVolume;

    /**
     * @description The custom SEI.
     *
     * @var passThrough
     */
    public $passThrough;

    /**
     * @description The custom payload type. Valid values: 100 to 254. Default value: 5.
     *
     * @example 100
     *
     * @var string
     */
    public $payloadType;
    protected $_name = [
        'layoutVolume' => 'LayoutVolume',
        'passThrough' => 'PassThrough',
        'payloadType' => 'PayloadType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutVolume) {
            $res['LayoutVolume'] = null !== $this->layoutVolume ? $this->layoutVolume->toMap() : null;
        }
        if (null !== $this->passThrough) {
            $res['PassThrough'] = null !== $this->passThrough ? $this->passThrough->toMap() : null;
        }
        if (null !== $this->payloadType) {
            $res['PayloadType'] = $this->payloadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seiParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutVolume'])) {
            $model->layoutVolume = layoutVolume::fromMap($map['LayoutVolume']);
        }
        if (isset($map['PassThrough'])) {
            $model->passThrough = passThrough::fromMap($map['PassThrough']);
        }
        if (isset($map['PayloadType'])) {
            $model->payloadType = $map['PayloadType'];
        }

        return $model;
    }
}
