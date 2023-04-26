<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData\aiLabelInfo;

use AlibabaCloud\Tea\Model;

class occurrences extends Model
{
    /**
     * @description 片段起始时间
     *
     * @var float
     */
    public $from;

    /**
     * @description 打分
     *
     * @var float
     */
    public $score;

    /**
     * @description 片段结束时间
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
     * @return occurrences
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
