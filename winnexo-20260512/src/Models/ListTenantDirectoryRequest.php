<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListTenantDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

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
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $sourceTypes;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appToken' => 'appToken',
        'directoryId' => 'directoryId',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'sortField' => 'sortField',
        'sortOrder' => 'sortOrder',
        'sourceTypes' => 'sourceTypes',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sortField) {
            $res['sortField'] = $this->sortField;
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
        }

        if (null !== $this->sourceTypes) {
            $res['sourceTypes'] = $this->sourceTypes;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sortField'])) {
            $model->sortField = $map['sortField'];
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['sourceTypes'])) {
            $model->sourceTypes = $map['sourceTypes'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
