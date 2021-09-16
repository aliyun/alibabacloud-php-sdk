<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData\transcodeDataItem\data;
use AlibabaCloud\Tea\Model;

class transcodeDataItem extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'data'      => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
