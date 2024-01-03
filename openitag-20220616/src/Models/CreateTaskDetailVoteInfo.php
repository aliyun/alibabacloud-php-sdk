<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskDetailVoteInfo extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $minVote;

    /**
     * @example 3
     *
     * @var int
     */
    public $voteNum;
    protected $_name = [
        'minVote' => 'MinVote',
        'voteNum' => 'VoteNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minVote) {
            $res['MinVote'] = $this->minVote;
        }
        if (null !== $this->voteNum) {
            $res['VoteNum'] = $this->voteNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskDetailVoteInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinVote'])) {
            $model->minVote = $map['MinVote'];
        }
        if (isset($map['VoteNum'])) {
            $model->voteNum = $map['VoteNum'];
        }

        return $model;
    }
}
