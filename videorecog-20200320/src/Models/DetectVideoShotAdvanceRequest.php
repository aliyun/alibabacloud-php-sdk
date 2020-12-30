<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectVideoShotAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'async'          => 'Async',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVideoShotAdvanceRequest
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

        return $model;
    }
}
