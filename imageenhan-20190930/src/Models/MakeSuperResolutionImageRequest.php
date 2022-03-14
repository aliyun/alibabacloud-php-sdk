<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class MakeSuperResolutionImageRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $upscaleFactor;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'mode'          => 'Mode',
        'upscaleFactor' => 'UpscaleFactor',
        'url'           => 'Url',
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
        if (null !== $this->upscaleFactor) {
            $res['UpscaleFactor'] = $this->upscaleFactor;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeSuperResolutionImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['UpscaleFactor'])) {
            $model->upscaleFactor = $map['UpscaleFactor'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
