<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy;

use AlibabaCloud\Dara\Model;

class videoPolicy extends Model
{
    /**
     * @var int
     */
    public $frameRate;
    protected $_name = [
        'frameRate' => 'FrameRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
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
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        return $model;
    }
}
