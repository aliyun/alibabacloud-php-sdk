<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SuperResolveVideoAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $bitRate;

    /**
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'bitRate'        => 'BitRate',
        'videoUrlObject' => 'VideoUrl',
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
        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuperResolveVideoAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
