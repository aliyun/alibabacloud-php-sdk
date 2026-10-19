<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListWorkItemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $businessStatuses;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string[]
     */
    public $itemTypes;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $priorities;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'businessStatuses' => 'businessStatuses',
        'collaborationGroupId' => 'collaborationGroupId',
        'itemTypes' => 'itemTypes',
        'keyword' => 'keyword',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'priorities' => 'priorities',
        'scope' => 'scope',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->businessStatuses)) {
            Model::validateArray($this->businessStatuses);
        }
        if (\is_array($this->itemTypes)) {
            Model::validateArray($this->itemTypes);
        }
        if (\is_array($this->priorities)) {
            Model::validateArray($this->priorities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatuses) {
            if (\is_array($this->businessStatuses)) {
                $res['businessStatuses'] = [];
                $n1 = 0;
                foreach ($this->businessStatuses as $item1) {
                    $res['businessStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->itemTypes) {
            if (\is_array($this->itemTypes)) {
                $res['itemTypes'] = [];
                $n1 = 0;
                foreach ($this->itemTypes as $item1) {
                    $res['itemTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->priorities) {
            if (\is_array($this->priorities)) {
                $res['priorities'] = [];
                $n1 = 0;
                foreach ($this->priorities as $item1) {
                    $res['priorities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['businessStatuses'])) {
            if (!empty($map['businessStatuses'])) {
                $model->businessStatuses = [];
                $n1 = 0;
                foreach ($map['businessStatuses'] as $item1) {
                    $model->businessStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['itemTypes'])) {
            if (!empty($map['itemTypes'])) {
                $model->itemTypes = [];
                $n1 = 0;
                foreach ($map['itemTypes'] as $item1) {
                    $model->itemTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['priorities'])) {
            if (!empty($map['priorities'])) {
                $model->priorities = [];
                $n1 = 0;
                foreach ($map['priorities'] as $item1) {
                    $model->priorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
