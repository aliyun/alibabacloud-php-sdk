<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListVariableGroupsRequest extends Model
{
    /**
     * @description 排序条件
     *
     * @var string
     */
    public $pageSort;

    /**
     * @description 排序顺序
     *
     * @var string
     */
    public $pageOrder;

    /**
     * @description 分页token，上一次请求的出参nextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 最大返回数，默认30
     *
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'pageSort'   => 'pageSort',
        'pageOrder'  => 'pageOrder',
        'nextToken'  => 'nextToken',
        'maxResults' => 'maxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSort) {
            $res['pageSort'] = $this->pageSort;
        }
        if (null !== $this->pageOrder) {
            $res['pageOrder'] = $this->pageOrder;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
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
        if (isset($map['pageSort'])) {
            $model->pageSort = $map['pageSort'];
        }
        if (isset($map['pageOrder'])) {
            $model->pageOrder = $map['pageOrder'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        return $model;
    }
}
