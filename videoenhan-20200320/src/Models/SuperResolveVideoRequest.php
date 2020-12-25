<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SuperResolveVideoRequest extends Model
{
    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var int
     */
    public $bitRate;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'async'    => 'Async',
        'bitRate'  => 'BitRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuperResolveVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        return $model;
    }
}
