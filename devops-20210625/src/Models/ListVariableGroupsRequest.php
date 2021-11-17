<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListVariableGroupsRequest extends Model
{
    /**
     * @description 最大返回数，默认30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页token，上一次请求的出参nextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序顺序
     *
     * @var string
     */
    public $pageOrder;

    /**
     * @description 排序条件
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
