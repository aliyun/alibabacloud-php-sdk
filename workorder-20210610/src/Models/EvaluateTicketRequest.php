<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Tea\Model;

class EvaluateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $score;

    /**
     * @var bool
     */
    public $solved;

    /**
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'content'  => 'Content',
        'score'    => 'Score',
        'solved'   => 'Solved',
        'ticketId' => 'TicketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->solved) {
            $res['Solved'] = $this->solved;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Solved'])) {
            $model->solved = $map['Solved'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
