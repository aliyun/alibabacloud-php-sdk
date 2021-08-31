<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupsRequest extends Model
{
    /**
     * @description 主机组id，多个逗号分割
     *
     * @var string
     */
    public $ids;

    /**
     * @description 主机组创建时间
     *
     * @var int
     */
    public $createStartTime;

    /**
     * @description 主机组结束时间
     *
     * @var int
     */
    public $createEndTime;

    /**
     * @description 主机组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 创建阿里云账号id，多个逗号分割
     *
     * @var string
     */
    public $creatorAccountIds;

    /**
     * @description 分页token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 结果返回个数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 排序条件ID
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
    protected $_name = [
        'ids'               => 'ids',
        'createStartTime'   => 'createStartTime',
        'createEndTime'     => 'createEndTime',
        'name'              => 'name',
        'creatorAccountIds' => 'creatorAccountIds',
        'nextToken'         => 'nextToken',
        'maxResults'        => 'maxResults',
        'pageSort'          => 'pageSort',
        'pageOrder'         => 'pageOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }
        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }
        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->creatorAccountIds) {
            $res['creatorAccountIds'] = $this->creatorAccountIds;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->pageSort) {
            $res['pageSort'] = $this->pageSort;
        }
        if (null !== $this->pageOrder) {
            $res['pageOrder'] = $this->pageOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ids'])) {
            $model->ids = $map['ids'];
        }
        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }
        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['creatorAccountIds'])) {
            $model->creatorAccountIds = $map['creatorAccountIds'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['pageSort'])) {
            $model->pageSort = $map['pageSort'];
        }
        if (isset($map['pageOrder'])) {
            $model->pageOrder = $map['pageOrder'];
        }

        return $model;
    }
}
