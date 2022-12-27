<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListVariableGroupsRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example aaaaaa
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example DESC
     *
     * @var string
     */
    public $pageOrder;

    /**
     * @example ID
     *
     * @var string
     */
    public $pageSort;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken'  => 'nextToken',
        'pageOrder'  => 'pageOrder',
        'pageSort'   => 'pageSort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pageOrder) {
            $res['pageOrder'] = $this->pageOrder;
        }
        if (null !== $this->pageSort) {
            $res['pageSort'] = $this->pageSort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVariableGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pageOrder'])) {
            $model->pageOrder = $map['pageOrder'];
        }
        if (isset($map['pageSort'])) {
            $model->pageSort = $map['pageSort'];
        }

        return $model;
    }
}
