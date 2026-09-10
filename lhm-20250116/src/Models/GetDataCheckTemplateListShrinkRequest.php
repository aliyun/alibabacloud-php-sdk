<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetDataCheckTemplateListShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $idListShrink;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var int
     */
    public $isBuiltin;

    /**
     * @var bool
     */
    public $needTotalCount;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'checkType' => 'checkType',
        'groupBy' => 'groupBy',
        'idListShrink' => 'idList',
        'isAdmin' => 'isAdmin',
        'isBuiltin' => 'isBuiltin',
        'needTotalCount' => 'needTotalCount',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'templateName' => 'templateName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->groupBy) {
            $res['groupBy'] = $this->groupBy;
        }

        if (null !== $this->idListShrink) {
            $res['idList'] = $this->idListShrink;
        }

        if (null !== $this->isAdmin) {
            $res['isAdmin'] = $this->isAdmin;
        }

        if (null !== $this->isBuiltin) {
            $res['isBuiltin'] = $this->isBuiltin;
        }

        if (null !== $this->needTotalCount) {
            $res['needTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['groupBy'])) {
            $model->groupBy = $map['groupBy'];
        }

        if (isset($map['idList'])) {
            $model->idListShrink = $map['idList'];
        }

        if (isset($map['isAdmin'])) {
            $model->isAdmin = $map['isAdmin'];
        }

        if (isset($map['isBuiltin'])) {
            $model->isBuiltin = $map['isBuiltin'];
        }

        if (isset($map['needTotalCount'])) {
            $model->needTotalCount = $map['needTotalCount'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
