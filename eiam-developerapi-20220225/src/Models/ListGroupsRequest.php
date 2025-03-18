<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @example group_xxx
     *
     * @var string
     */
    public $groupNameStartWith;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description nextToken
     *
     * @example NTxxx
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'groupNameStartWith' => 'groupNameStartWith',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNameStartWith) {
            $res['groupNameStartWith'] = $this->groupNameStartWith;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupNameStartWith'])) {
            $model->groupNameStartWith = $map['groupNameStartWith'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
