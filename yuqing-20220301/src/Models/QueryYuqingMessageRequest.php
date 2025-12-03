<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class QueryYuqingMessageRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SearchCondition
     */
    public $searchCondition;

    /**
     * @var string
     */
    public $teamHashId;
    protected $_name = [
        'requestId' => 'requestId',
        'searchCondition' => 'searchCondition',
        'teamHashId' => 'teamHashId',
    ];

    public function validate()
    {
        if (null !== $this->searchCondition) {
            $this->searchCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->searchCondition) {
            $res['searchCondition'] = null !== $this->searchCondition ? $this->searchCondition->toArray($noStream) : $this->searchCondition;
        }

        if (null !== $this->teamHashId) {
            $res['teamHashId'] = $this->teamHashId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['searchCondition'])) {
            $model->searchCondition = SearchCondition::fromMap($map['searchCondition']);
        }

        if (isset($map['teamHashId'])) {
            $model->teamHashId = $map['teamHashId'];
        }

        return $model;
    }
}
