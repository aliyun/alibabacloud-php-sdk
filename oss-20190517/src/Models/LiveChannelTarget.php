<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LiveChannelTarget extends Model
{
    /**
     * @var int
     */
    public $fragCount;

    /**
     * @var int
     */
    public $fragDuration;

    /**
     * @var string
     */
    public $playlistName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fragCount'    => 'FragCount',
        'fragDuration' => 'FragDuration',
        'playlistName' => 'PlaylistName',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fragCount) {
            $res['FragCount'] = $this->fragCount;
        }
        if (null !== $this->fragDuration) {
            $res['FragDuration'] = $this->fragDuration;
        }
        if (null !== $this->playlistName) {
            $res['PlaylistName'] = $this->playlistName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiveChannelTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FragCount'])) {
            $model->fragCount = $map['FragCount'];
        }
        if (isset($map['FragDuration'])) {
            $model->fragDuration = $map['FragDuration'];
        }
        if (isset($map['PlaylistName'])) {
            $model->playlistName = $map['PlaylistName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
