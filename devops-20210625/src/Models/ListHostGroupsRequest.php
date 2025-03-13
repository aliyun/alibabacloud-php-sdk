<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupsRequest extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createEndTime;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createStartTime;

    /**
     * @example 1112122121,3223332
     *
     * @var string
     */
    public $creatorAccountIds;

    /**
     * @example 121,1212121232
     *
     * @var string
     */
    public $ids;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 主机组
     *
     * @var string
     */
    public $name;

    /**
     * @example 221212221
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
        'createEndTime'     => 'createEndTime',
        'createStartTime'   => 'createStartTime',
        'creatorAccountIds' => 'creatorAccountIds',
        'ids'               => 'ids',
        'maxResults'        => 'maxResults',
        'name'              => 'name',
        'nextToken'         => 'nextToken',
        'pageOrder'         => 'pageOrder',
        'pageSort'          => 'pageSort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }
        if (null !== $this->creatorAccountIds) {
            $res['creatorAccountIds'] = $this->creatorAccountIds;
        }
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
     * @return ListHostGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }
        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }
        if (isset($map['creatorAccountIds'])) {
            $model->creatorAccountIds = $map['creatorAccountIds'];
        }
        if (isset($map['ids'])) {
            $model->ids = $map['ids'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
