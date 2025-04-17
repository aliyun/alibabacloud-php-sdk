<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteMezzaninesRequest extends Model
{
    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $videoIds;
    protected $_name = [
        'force' => 'Force',
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }

        return $model;
    }
}
