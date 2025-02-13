<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponseBody;

use AlibabaCloud\Dara\Model;

class outOrgUserList extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $watchLiveTime;
    /**
     * @var int
     */
    public $watchPlaybackTime;
    /**
     * @var int
     */
    public $watchProgressMs;
    protected $_name = [
        'name'              => 'Name',
        'watchLiveTime'     => 'WatchLiveTime',
        'watchPlaybackTime' => 'WatchPlaybackTime',
        'watchProgressMs'   => 'WatchProgressMs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->watchLiveTime) {
            $res['WatchLiveTime'] = $this->watchLiveTime;
        }

        if (null !== $this->watchPlaybackTime) {
            $res['WatchPlaybackTime'] = $this->watchPlaybackTime;
        }

        if (null !== $this->watchProgressMs) {
            $res['WatchProgressMs'] = $this->watchProgressMs;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['WatchLiveTime'])) {
            $model->watchLiveTime = $map['WatchLiveTime'];
        }

        if (isset($map['WatchPlaybackTime'])) {
            $model->watchPlaybackTime = $map['WatchPlaybackTime'];
        }

        if (isset($map['WatchProgressMs'])) {
            $model->watchProgressMs = $map['WatchProgressMs'];
        }

        return $model;
    }
}
