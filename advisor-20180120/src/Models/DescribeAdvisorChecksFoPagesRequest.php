<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeAdvisorChecksFoPagesRequest extends Model
{
    /**
     * @var int
     */
    public $assumeAliyunId;

    /**
     * @var string
     */
    public $bizCategory;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int[]
     */
    public $checkTypes;

    /**
     * @var string
     */
    public $name;

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
     * @var string
     */
    public $token;
    protected $_name = [
        'assumeAliyunId' => 'AssumeAliyunId',
        'bizCategory' => 'BizCategory',
        'category' => 'Category',
        'checkTypes' => 'CheckTypes',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'product' => 'Product',
        'source' => 'Source',
        'status' => 'Status',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (\is_array($this->checkTypes)) {
            Model::validateArray($this->checkTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunId) {
            $res['AssumeAliyunId'] = $this->assumeAliyunId;
        }

        if (null !== $this->bizCategory) {
            $res['BizCategory'] = $this->bizCategory;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->checkTypes) {
            if (\is_array($this->checkTypes)) {
                $res['CheckTypes'] = [];
                $n1 = 0;
                foreach ($this->checkTypes as $item1) {
                    $res['CheckTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AssumeAliyunId'])) {
            $model->assumeAliyunId = $map['AssumeAliyunId'];
        }

        if (isset($map['BizCategory'])) {
            $model->bizCategory = $map['BizCategory'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CheckTypes'])) {
            if (!empty($map['CheckTypes'])) {
                $model->checkTypes = [];
                $n1 = 0;
                foreach ($map['CheckTypes'] as $item1) {
                    $model->checkTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
