<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result\imageSearchShots;

use AlibabaCloud\Tea\Model;

class imageSearchShots extends Model
{
    /**
     * @var string
     */
    public $matchedFrame;

    /**
     * @var string
     */
    public $matchedTimestamp;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'matchedFrame'     => 'MatchedFrame',
        'matchedTimestamp' => 'MatchedTimestamp',
        'similarity'       => 'Similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchedFrame) {
            $res['MatchedFrame'] = $this->matchedFrame;
        }
        if (null !== $this->matchedTimestamp) {
            $res['MatchedTimestamp'] = $this->matchedTimestamp;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSearchShots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchedFrame'])) {
            $model->matchedFrame = $map['MatchedFrame'];
        }
        if (isset($map['MatchedTimestamp'])) {
            $model->matchedTimestamp = $map['MatchedTimestamp'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
