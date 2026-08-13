<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListUsersRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $keyword;

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
    public $roleCodes;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accountIds' => 'accountIds',
        'isActive' => 'isActive',
        'keyword' => 'keyword',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'roleCodes' => 'roleCodes',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['accountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['accountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['roleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['roleCodes'][$n1] = $item1;
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
        if (isset($map['accountIds'])) {
            if (!empty($map['accountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['accountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['roleCodes'])) {
            if (!empty($map['roleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['roleCodes'] as $item1) {
                    $model->roleCodes[$n1] = $item1;
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
