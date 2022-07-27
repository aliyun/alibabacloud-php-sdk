<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $createEndTime;

    /**
     * @var int
     */
    public $createStartTime;

    /**
     * @var string
     */
    public $creatorAccountIds;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pageOrder;

    /**
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
