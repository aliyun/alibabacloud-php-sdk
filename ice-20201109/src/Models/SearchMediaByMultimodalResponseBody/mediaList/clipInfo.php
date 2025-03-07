<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class clipInfo extends Model
{
    /**
     * @description The start time of the clip.
     *
     * @example 2
     *
     * @var float
     */
    public $from;

    /**
     * @description The score.
     *
     * @example 1.2
     *
     * @var float
     */
    public $score;

    /**
     * @description The end time of the clip.
     *
     * @example 4
     *
     * @var float
     */
    public $to;
    protected $_name = [
        'from'  => 'From',
        'score' => 'Score',
        'to'    => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
