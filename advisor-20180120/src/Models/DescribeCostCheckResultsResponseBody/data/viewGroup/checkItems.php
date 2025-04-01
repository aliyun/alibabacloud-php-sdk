<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponseBody\data\viewGroup;

use AlibabaCloud\Dara\Model;

class checkItems extends Model
{
    /**
     * @var int
     */
    public $adviceCount;

    /**
     * @var int
     */
    public $adviceResourceCount;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var float
     */
    public $currentCost;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $expectedSavingCost;

    /**
     * @var float
     */
    public $optimizedCost;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'adviceCount' => 'AdviceCount',
        'adviceResourceCount' => 'AdviceResourceCount',
        'category' => 'Category',
        'checkId' => 'CheckId',
        'checkName' => 'CheckName',
        'currentCost' => 'CurrentCost',
        'description' => 'Description',
        'expectedSavingCost' => 'ExpectedSavingCost',
        'optimizedCost' => 'OptimizedCost',
        'product' => 'Product',
        'severity' => 'Severity',
        'summary' => 'Summary',
        'tips' => 'Tips',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceCount) {
            $res['AdviceCount'] = $this->adviceCount;
        }

        if (null !== $this->adviceResourceCount) {
            $res['AdviceResourceCount'] = $this->adviceResourceCount;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->currentCost) {
            $res['CurrentCost'] = $this->currentCost;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expectedSavingCost) {
            $res['ExpectedSavingCost'] = $this->expectedSavingCost;
        }

        if (null !== $this->optimizedCost) {
            $res['OptimizedCost'] = $this->optimizedCost;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
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
        if (isset($map['AdviceCount'])) {
            $model->adviceCount = $map['AdviceCount'];
        }

        if (isset($map['AdviceResourceCount'])) {
            $model->adviceResourceCount = $map['AdviceResourceCount'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['CurrentCost'])) {
            $model->currentCost = $map['CurrentCost'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpectedSavingCost'])) {
            $model->expectedSavingCost = $map['ExpectedSavingCost'];
        }

        if (isset($map['OptimizedCost'])) {
            $model->optimizedCost = $map['OptimizedCost'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
