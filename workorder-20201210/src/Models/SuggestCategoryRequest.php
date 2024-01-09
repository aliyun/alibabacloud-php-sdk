<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models;

use AlibabaCloud\Tea\Model;

class SuggestCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var bool
     */
    public $useHotSuggestCatchAll;
    protected $_name = [
        'content'               => 'Content',
        'ticketId'              => 'TicketId',
        'topN'                  => 'TopN',
        'useHotSuggestCatchAll' => 'UseHotSuggestCatchAll',
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
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->useHotSuggestCatchAll) {
            $res['UseHotSuggestCatchAll'] = $this->useHotSuggestCatchAll;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuggestCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['UseHotSuggestCatchAll'])) {
            $model->useHotSuggestCatchAll = $map['UseHotSuggestCatchAll'];
        }

        return $model;
    }
}
