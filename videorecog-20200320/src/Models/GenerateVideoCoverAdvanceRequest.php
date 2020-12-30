<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var bool
     */
    public $isGif;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'async'          => 'Async',
        'isGif'          => 'IsGif',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrlObject) {
            $res['VideoUrlObject'] = $this->videoUrlObject;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->isGif) {
            $res['IsGif'] = $this->isGif;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoCoverAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['IsGif'])) {
            $model->isGif = $map['IsGif'];
        }

        return $model;
    }
}
