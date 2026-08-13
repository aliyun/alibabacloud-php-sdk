<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListOutputFilesRequest extends Model
{
    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $sharedOnly;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'itemType' => 'itemType',
        'keyword' => 'keyword',
        'operatingObjectName' => 'operatingObjectName',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'sharedOnly' => 'sharedOnly',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sharedOnly) {
            $res['sharedOnly'] = $this->sharedOnly;
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
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sharedOnly'])) {
            $model->sharedOnly = $map['sharedOnly'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
