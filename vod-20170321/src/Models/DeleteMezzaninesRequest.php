<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesRequest extends Model
{
    /**
     * @var string
     */
    public $videoIds;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'videoIds' => 'VideoIds',
        'force'    => 'Force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMezzaninesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
