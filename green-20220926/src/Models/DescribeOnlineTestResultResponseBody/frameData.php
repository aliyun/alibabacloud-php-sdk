<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody;

use AlibabaCloud\Tea\Model;

class frameData extends Model
{
    /**
     * @example 1725761005419
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example https://xxxxxxxxx.com/data/data.mp4
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
