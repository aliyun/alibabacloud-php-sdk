<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsShrink;

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
     * @var string
     */
    public $roleCodesShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accountIdsShrink' => 'accountIds',
        'isActive' => 'isActive',
        'keyword' => 'keyword',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'roleCodesShrink' => 'roleCodes',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['accountIds'] = $this->accountIdsShrink;
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

        if (null !== $this->roleCodesShrink) {
            $res['roleCodes'] = $this->roleCodesShrink;
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
            $model->accountIdsShrink = $map['accountIds'];
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
            $model->roleCodesShrink = $map['roleCodes'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
