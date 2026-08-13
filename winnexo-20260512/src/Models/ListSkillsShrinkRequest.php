<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListSkillsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bindStatus;

    /**
     * @var string
     */
    public $filterType;

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
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'bindStatus' => 'bindStatus',
        'filterType' => 'filterType',
        'keyword' => 'keyword',
        'operatingObjectName' => 'operatingObjectName',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'tagsShrink' => 'tags',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindStatus) {
            $res['bindStatus'] = $this->bindStatus;
        }

        if (null !== $this->filterType) {
            $res['filterType'] = $this->filterType;
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

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['bindStatus'])) {
            $model->bindStatus = $map['bindStatus'];
        }

        if (isset($map['filterType'])) {
            $model->filterType = $map['filterType'];
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

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
