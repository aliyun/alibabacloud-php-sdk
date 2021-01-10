<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\coverImageList;

use AlibabaCloud\Tea\Model;

class coverImage extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'time'  => 'Time',
        'score' => 'Score',
        'url'   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
