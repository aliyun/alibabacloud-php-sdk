<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody\data;

use AlibabaCloud\Tea\Model;

class advisorCheck extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $category;

    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2023-07-01 00:00:00
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2023-07-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description ID
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operateColumn;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example -
     *
     * @var string
     */
    public $suppResources;

    /**
     * @var string
     */
    public $tips;

    /**
     * @example [
     * ]
     * @var string
     */
    public $viewColumn;
    protected $_name = [
        'category'      => 'Category',
        'code'          => 'Code',
        'description'   => 'Description',
        'gmtCreated'    => 'GmtCreated',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'name'          => 'Name',
        'operateColumn' => 'OperateColumn',
        'product'       => 'Product',
        'status'        => 'Status',
        'suppResources' => 'SuppResources',
        'tips'          => 'Tips',
        'viewColumn'    => 'ViewColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->suppResources) {
            $res['SuppResources'] = $this->suppResources;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->viewColumn) {
            $res['ViewColumn'] = $this->viewColumn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advisorCheck
     */
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['SuppResources'])) {
            $model->suppResources = $map['SuppResources'];
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
