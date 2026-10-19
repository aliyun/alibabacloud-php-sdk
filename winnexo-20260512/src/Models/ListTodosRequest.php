<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListTodosRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

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
     * @var string[]
     */
    public $readStatus;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $sourceTypes;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'keyword' => 'keyword',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'priorities' => 'priorities',
        'readStatus' => 'readStatus',
        'sortBy' => 'sortBy',
        'sourceTypes' => 'sourceTypes',
        'statuses' => 'statuses',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->priorities)) {
            Model::validateArray($this->priorities);
        }
        if (\is_array($this->readStatus)) {
            Model::validateArray($this->readStatus);
        }
        if (\is_array($this->sourceTypes)) {
            Model::validateArray($this->sourceTypes);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
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

        if (null !== $this->readStatus) {
            if (\is_array($this->readStatus)) {
                $res['readStatus'] = [];
                $n1 = 0;
                foreach ($this->readStatus as $item1) {
                    $res['readStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }

        if (null !== $this->sourceTypes) {
            if (\is_array($this->sourceTypes)) {
                $res['sourceTypes'] = [];
                $n1 = 0;
                foreach ($this->sourceTypes as $item1) {
                    $res['sourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
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

        if (isset($map['readStatus'])) {
            if (!empty($map['readStatus'])) {
                $model->readStatus = [];
                $n1 = 0;
                foreach ($map['readStatus'] as $item1) {
                    $model->readStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }

        if (isset($map['sourceTypes'])) {
            if (!empty($map['sourceTypes'])) {
                $model->sourceTypes = [];
                $n1 = 0;
                foreach ($map['sourceTypes'] as $item1) {
                    $model->sourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['statuses'])) {
            if (!empty($map['statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
