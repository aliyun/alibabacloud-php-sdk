<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams\userPanes;

use AlibabaCloud\Dara\Model;

class subBackground extends Model
{
    /**
     * @var int
     */
    public $renderMode;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'renderMode' => 'RenderMode',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderMode) {
            $res['RenderMode'] = $this->renderMode;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['RenderMode'])) {
            $model->renderMode = $map['RenderMode'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
