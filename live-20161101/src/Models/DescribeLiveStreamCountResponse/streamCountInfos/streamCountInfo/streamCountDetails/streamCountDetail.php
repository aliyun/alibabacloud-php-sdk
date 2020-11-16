<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos\streamCountInfo\streamCountDetails;

use AlibabaCloud\Tea\Model;

class streamCountDetail extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $videoDataRate;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'format'        => 'Format',
        'videoDataRate' => 'VideoDataRate',
        'count'         => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('videoDataRate', $this->videoDataRate, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->videoDataRate) {
            $res['VideoDataRate'] = $this->videoDataRate;
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
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['VideoDataRate'])) {
            $model->videoDataRate = $map['VideoDataRate'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
