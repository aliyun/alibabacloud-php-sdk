<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\seiParams\layoutVolume;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\seiParams\passThrough;

class seiParams extends Model
{
    /**
     * @var layoutVolume
     */
    public $layoutVolume;

    /**
     * @var passThrough
     */
    public $passThrough;
    protected $_name = [
        'layoutVolume' => 'LayoutVolume',
        'passThrough' => 'PassThrough',
    ];

    public function validate()
    {
        if (null !== $this->layoutVolume) {
            $this->layoutVolume->validate();
        }
        if (null !== $this->passThrough) {
            $this->passThrough->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layoutVolume) {
            $res['LayoutVolume'] = null !== $this->layoutVolume ? $this->layoutVolume->toArray($noStream) : $this->layoutVolume;
        }

        if (null !== $this->passThrough) {
            $res['PassThrough'] = null !== $this->passThrough ? $this->passThrough->toArray($noStream) : $this->passThrough;
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
        if (isset($map['LayoutVolume'])) {
            $model->layoutVolume = layoutVolume::fromMap($map['LayoutVolume']);
        }

        if (isset($map['PassThrough'])) {
            $model->passThrough = passThrough::fromMap($map['PassThrough']);
        }

        return $model;
    }
}
