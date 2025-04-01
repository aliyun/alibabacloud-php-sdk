<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody\data;

use AlibabaCloud\Dara\Model;

class advisorCheck extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operateColumn;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $viewColumn;
    protected $_name = [
        'category' => 'Category',
        'code' => 'Code',
        'description' => 'Description',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'operateColumn' => 'OperateColumn',
        'product' => 'Product',
        'status' => 'Status',
        'tips' => 'Tips',
        'viewColumn' => 'ViewColumn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operateColumn) {
            $res['OperateColumn'] = $this->operateColumn;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        if (null !== $this->viewColumn) {
            $res['ViewColumn'] = $this->viewColumn;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperateColumn'])) {
            $model->operateColumn = $map['OperateColumn'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        if (isset($map['ViewColumn'])) {
            $model->viewColumn = $map['ViewColumn'];
        }

        return $model;
    }
}
