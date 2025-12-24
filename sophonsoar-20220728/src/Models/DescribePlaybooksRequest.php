<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribePlaybooksRequest extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var int
     */
    public $endMillis;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $ownType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $paramTypes;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $playbookUuids;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var int
     */
    public $startMillis;
    protected $_name = [
        'active' => 'Active',
        'endMillis' => 'EndMillis',
        'lang' => 'Lang',
        'name' => 'Name',
        'order' => 'Order',
        'ownType' => 'OwnType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paramTypes' => 'ParamTypes',
        'playbookUuid' => 'PlaybookUuid',
        'playbookUuids' => 'PlaybookUuids',
        'sort' => 'Sort',
        'startMillis' => 'StartMillis',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->endMillis) {
            $res['EndMillis'] = $this->endMillis;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->paramTypes) {
            $res['ParamTypes'] = $this->paramTypes;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->playbookUuids) {
            $res['PlaybookUuids'] = $this->playbookUuids;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->startMillis) {
            $res['StartMillis'] = $this->startMillis;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['EndMillis'])) {
            $model->endMillis = $map['EndMillis'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParamTypes'])) {
            $model->paramTypes = $map['ParamTypes'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['PlaybookUuids'])) {
            $model->playbookUuids = $map['PlaybookUuids'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StartMillis'])) {
            $model->startMillis = $map['StartMillis'];
        }

        return $model;
    }
}
