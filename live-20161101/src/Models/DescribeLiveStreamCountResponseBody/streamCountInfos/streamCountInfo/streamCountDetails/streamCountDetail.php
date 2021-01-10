<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails;

use AlibabaCloud\Tea\Model;

class streamCountDetail extends Model
{
    /**
     * @var int
     */
    public $videoDataRate;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'videoDataRate' => 'VideoDataRate',
        'format'        => 'Format',
        'count'         => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoDataRate) {
            $res['VideoDataRate'] = $this->videoDataRate;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoDataRate'])) {
            $model->videoDataRate = $map['VideoDataRate'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
