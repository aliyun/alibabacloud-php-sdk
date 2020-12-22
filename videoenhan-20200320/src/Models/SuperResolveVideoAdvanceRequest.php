<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SuperResolveVideoAdvanceRequest extends Model
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
     * @var int
     */
    public $bitRate;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'async'          => 'Async',
        'bitRate'        => 'BitRate',
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
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
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
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
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
