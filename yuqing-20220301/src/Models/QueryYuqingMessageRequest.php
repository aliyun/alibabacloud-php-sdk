<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class QueryYuqingMessageRequest extends Model
{
    /**
     * @example 5645a6c9-7d21-4926-a410-db9a1af85faa
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SearchCondition
     */
    public $searchCondition;

    /**
     * @example xxxx43434dsdsd
     *
     * @var string
     */
    public $teamHashId;
    protected $_name = [
        'requestId'       => 'requestId',
        'searchCondition' => 'searchCondition',
        'teamHashId'      => 'teamHashId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->searchCondition) {
            $res['searchCondition'] = null !== $this->searchCondition ? $this->searchCondition->toMap() : null;
        }
        if (null !== $this->teamHashId) {
            $res['teamHashId'] = $this->teamHashId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryYuqingMessageRequest
     */
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
