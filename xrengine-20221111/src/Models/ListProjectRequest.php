<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class ListProjectRequest extends Model
{
    /**
     * @var string
     */
    public $bizUsage;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $excludedBizUsage;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $withSource;

    /**
     * @var bool
     */
    public $withUser;
    protected $_name = [
        'bizUsage' => 'BizUsage',
        'current' => 'Current',
        'excludedBizUsage' => 'ExcludedBizUsage',
        'jwtToken' => 'JwtToken',
        'size' => 'Size',
        'sortField' => 'SortField',
        'status' => 'Status',
        'title' => 'Title',
        'type' => 'Type',
        'withSource' => 'WithSource',
        'withUser' => 'WithUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->excludedBizUsage) {
            $res['ExcludedBizUsage'] = $this->excludedBizUsage;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->withSource) {
            $res['WithSource'] = $this->withSource;
        }

        if (null !== $this->withUser) {
            $res['WithUser'] = $this->withUser;
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
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['ExcludedBizUsage'])) {
            $model->excludedBizUsage = $map['ExcludedBizUsage'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WithSource'])) {
            $model->withSource = $map['WithSource'];
        }

        if (isset($map['WithUser'])) {
            $model->withUser = $map['WithUser'];
        }

        return $model;
    }
}
