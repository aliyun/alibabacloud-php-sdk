<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpPlayBackTimeByLiveIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $watchTime;
    protected $_name = [
        'watchTime' => 'WatchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->watchTime) {
            $res['WatchTime'] = $this->watchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WatchTime'])) {
            $model->watchTime = $map['WatchTime'];
        }

        return $model;
    }
}
