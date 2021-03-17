<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MakeSuperResolutionImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $urlObject;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $upscaleFactor;
    protected $_name = [
        'urlObject'     => 'UrlObject',
        'mode'          => 'Mode',
        'upscaleFactor' => 'UpscaleFactor',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->upscaleFactor) {
            $res['UpscaleFactor'] = $this->upscaleFactor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeSuperResolutionImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['UpscaleFactor'])) {
            $model->upscaleFactor = $map['UpscaleFactor'];
        }

        return $model;
    }
}
