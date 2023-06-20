<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example cmap*****
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $firstCategoryName;

    /**
     * @example //photogallery.oss-cn-hangzhou.aliyuncs.com/photo/1744526877246715/09605255-87fd-44d1-8143-96ebc8019d46.jpeg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 100
     *
     * @var string
     */
    public $price;

    /**
     * @example 5
     *
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $secondCategoryName;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @example 30
     *
     * @var string
     */
    public $submissionRadio;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @example 1911534921******
     *
     * @var string
     */
    public $supplierUId;

    /**
     * @example 109
     *
     * @var string
     */
    public $tradeCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @example 55
     *
     * @var string
     */
    public $userCommentCount;
    protected $_name = [
        'code'               => 'Code',
        'firstCategoryName'  => 'FirstCategoryName',
        'imageUrl'           => 'ImageUrl',
        'name'               => 'Name',
        'price'              => 'Price',
        'score'              => 'Score',
        'secondCategoryName' => 'SecondCategoryName',
        'shortDescription'   => 'ShortDescription',
        'submissionRadio'    => 'SubmissionRadio',
        'supplierName'       => 'SupplierName',
        'supplierUId'        => 'SupplierUId',
        'tradeCount'         => 'TradeCount',
        'type'               => 'Type',
        'userCommentCount'   => 'UserCommentCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->firstCategoryName) {
            $res['FirstCategoryName'] = $this->firstCategoryName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->secondCategoryName) {
            $res['SecondCategoryName'] = $this->secondCategoryName;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->submissionRadio) {
            $res['SubmissionRadio'] = $this->submissionRadio;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUId) {
            $res['SupplierUId'] = $this->supplierUId;
        }
        if (null !== $this->tradeCount) {
            $res['TradeCount'] = $this->tradeCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userCommentCount) {
            $res['UserCommentCount'] = $this->userCommentCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FirstCategoryName'])) {
            $model->firstCategoryName = $map['FirstCategoryName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SecondCategoryName'])) {
            $model->secondCategoryName = $map['SecondCategoryName'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['SubmissionRadio'])) {
            $model->submissionRadio = $map['SubmissionRadio'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUId'])) {
            $model->supplierUId = $map['SupplierUId'];
        }
        if (isset($map['TradeCount'])) {
            $model->tradeCount = $map['TradeCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserCommentCount'])) {
            $model->userCommentCount = $map['UserCommentCount'];
        }

        return $model;
    }
}
