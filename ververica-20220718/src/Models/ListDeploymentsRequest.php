<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ListDeploymentsRequest extends Model
{
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $executionMode;
    /**
     * @var string
     */
    public $labelKey;
    /**
     * @var string
     */
    public $labelValueArray;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $name;
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
    public $sortName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creator'         => 'creator',
        'executionMode'   => 'executionMode',
        'labelKey'        => 'labelKey',
        'labelValueArray' => 'labelValueArray',
        'modifier'        => 'modifier',
        'name'            => 'name',
        'pageIndex'       => 'pageIndex',
        'pageSize'        => 'pageSize',
        'sortName'        => 'sortName',
        'status'          => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
        }

        if (null !== $this->labelKey) {
            $res['labelKey'] = $this->labelKey;
        }

        if (null !== $this->labelValueArray) {
            $res['labelValueArray'] = $this->labelValueArray;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sortName) {
            $res['sortName'] = $this->sortName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
        }

        if (isset($map['labelKey'])) {
            $model->labelKey = $map['labelKey'];
        }

        if (isset($map['labelValueArray'])) {
            $model->labelValueArray = $map['labelValueArray'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sortName'])) {
            $model->sortName = $map['sortName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
