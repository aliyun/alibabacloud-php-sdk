<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListChangeRequestsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appNameList;

    /**
     * @var string
     */
    public $displayNameKeyword;

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
    public $organizationId;

    /**
     * @var string[]
     */
    public $ownerIdList;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $pagination;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string[]
     */
    public $stateList;
    protected $_name = [
        'appNameList' => 'appNameList',
        'displayNameKeyword' => 'displayNameKeyword',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'organizationId' => 'organizationId',
        'ownerIdList' => 'ownerIdList',
        'page' => 'page',
        'pagination' => 'pagination',
        'perPage' => 'perPage',
        'sort' => 'sort',
        'stateList' => 'stateList',
    ];

    public function validate()
    {
        if (\is_array($this->appNameList)) {
            Model::validateArray($this->appNameList);
        }
        if (\is_array($this->ownerIdList)) {
            Model::validateArray($this->ownerIdList);
        }
        if (\is_array($this->stateList)) {
            Model::validateArray($this->stateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appNameList) {
            if (\is_array($this->appNameList)) {
                $res['appNameList'] = [];
                $n1 = 0;
                foreach ($this->appNameList as $item1) {
                    $res['appNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayNameKeyword) {
            $res['displayNameKeyword'] = $this->displayNameKeyword;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->ownerIdList) {
            if (\is_array($this->ownerIdList)) {
                $res['ownerIdList'] = [];
                $n1 = 0;
                foreach ($this->ownerIdList as $item1) {
                    $res['ownerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pagination) {
            $res['pagination'] = $this->pagination;
        }

        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->stateList) {
            if (\is_array($this->stateList)) {
                $res['stateList'] = [];
                $n1 = 0;
                foreach ($this->stateList as $item1) {
                    $res['stateList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['appNameList'])) {
            if (!empty($map['appNameList'])) {
                $model->appNameList = [];
                $n1 = 0;
                foreach ($map['appNameList'] as $item1) {
                    $model->appNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['displayNameKeyword'])) {
            $model->displayNameKeyword = $map['displayNameKeyword'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['ownerIdList'])) {
            if (!empty($map['ownerIdList'])) {
                $model->ownerIdList = [];
                $n1 = 0;
                foreach ($map['ownerIdList'] as $item1) {
                    $model->ownerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pagination'])) {
            $model->pagination = $map['pagination'];
        }

        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['stateList'])) {
            if (!empty($map['stateList'])) {
                $model->stateList = [];
                $n1 = 0;
                foreach ($map['stateList'] as $item1) {
                    $model->stateList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
