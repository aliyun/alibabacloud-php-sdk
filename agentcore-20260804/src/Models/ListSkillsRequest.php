<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListSkillsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'owner' => 'owner',
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'scope' => 'scope',
        'search' => 'search',
        'skillName' => 'skillName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->search) {
            $res['search'] = $this->search;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        return $model;
    }
}
