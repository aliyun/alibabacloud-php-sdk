<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\seiParams\layoutVolume;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\seiParams\passThrough;
use AlibabaCloud\Tea\Model;

class seiParams extends Model
{
    /**
     * @description The layout and volume SEI. If you leave this parameter empty, the default layout and volume SEI is used.
     *
     * @var layoutVolume
     */
    public $layoutVolume;

    /**
     * @description Specifies whether to pass through the SEI.
     *
     * @var passThrough
     */
    public $passThrough;
    protected $_name = [
        'layoutVolume' => 'LayoutVolume',
        'passThrough' => 'PassThrough',
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

        return $model;
    }
}
