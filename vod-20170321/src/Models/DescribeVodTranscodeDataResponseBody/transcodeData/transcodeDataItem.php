<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData\transcodeDataItem\data;
use AlibabaCloud\Tea\Model;

class transcodeDataItem extends Model
{
    /**
     * @description The statistics on transcoding of different specifications.
     *
     * @var data
     */
    public $data;

    /**
     * @description The timestamp of the returned data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-01T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'data'      => 'Data',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
