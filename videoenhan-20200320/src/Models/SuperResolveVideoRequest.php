<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SuperResolveVideoRequest extends Model
{
    /**
     * @var int
     */
    public $bitRate;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'bitRate'  => 'BitRate',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
