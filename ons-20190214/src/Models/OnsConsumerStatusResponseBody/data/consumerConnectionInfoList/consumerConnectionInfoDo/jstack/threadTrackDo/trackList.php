<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo;

use AlibabaCloud\Tea\Model;

class trackList extends Model
{
    /**
     * @var string[]
     */
    public $track;
    protected $_name = [
        'track' => 'Track',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->track) {
            $res['Track'] = $this->track;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Track'])) {
            if (!empty($map['Track'])) {
                $model->track = $map['Track'];
            }
        }

        return $model;
    }
}
