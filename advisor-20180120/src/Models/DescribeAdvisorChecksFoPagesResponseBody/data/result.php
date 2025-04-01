<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksFoPagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
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
    public $configSupport;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inspectionScope;

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
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int[]
     */
    public $subCategory;

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
        'configSupport' => 'ConfigSupport',
        'description' => 'Description',
        'inspectionScope' => 'InspectionScope',
        'name' => 'Name',
        'operateColumn' => 'OperateColumn',
        'product' => 'Product',
        'source' => 'Source',
        'status' => 'Status',
        'subCategory' => 'SubCategory',
        'tips' => 'Tips',
        'viewColumn' => 'ViewColumn',
    ];

    public function validate()
    {
        if (\is_array($this->subCategory)) {
            Model::validateArray($this->subCategory);
        }
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

        if (null !== $this->configSupport) {
            $res['ConfigSupport'] = $this->configSupport;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inspectionScope) {
            $res['InspectionScope'] = $this->inspectionScope;
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

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subCategory) {
            if (\is_array($this->subCategory)) {
                $res['SubCategory'] = [];
                $n1 = 0;
                foreach ($this->subCategory as $item1) {
                    $res['SubCategory'][$n1++] = $item1;
                }
            }
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

        if (isset($map['ConfigSupport'])) {
            $model->configSupport = $map['ConfigSupport'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InspectionScope'])) {
            $model->inspectionScope = $map['InspectionScope'];
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

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubCategory'])) {
            if (!empty($map['SubCategory'])) {
                $model->subCategory = [];
                $n1 = 0;
                foreach ($map['SubCategory'] as $item1) {
                    $model->subCategory[$n1++] = $item1;
                }
            }
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
