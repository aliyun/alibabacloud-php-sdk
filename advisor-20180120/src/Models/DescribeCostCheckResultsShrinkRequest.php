<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostCheckResultsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assumeAliyunIdListShrink;

    /**
     * @var string
     */
    public $checkIdsShrink;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $resourceGroupIdListShrink;

    /**
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var string
     */
    public $tagKeysShrink;

    /**
     * @var string
     */
    public $tagListShrink;

    /**
     * @var string
     */
    public $tagValuesShrink;
    protected $_name = [
        'assumeAliyunIdListShrink' => 'AssumeAliyunIdList',
        'checkIdsShrink' => 'CheckIds',
        'groupBy' => 'GroupBy',
        'product' => 'Product',
        'regionIdsShrink' => 'RegionIds',
        'resourceGroupIdListShrink' => 'ResourceGroupIdList',
        'resourceIdsShrink' => 'ResourceIds',
        'resourceName' => 'ResourceName',
        'severity' => 'Severity',
        'tagKeysShrink' => 'TagKeys',
        'tagListShrink' => 'TagList',
        'tagValuesShrink' => 'TagValues',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunIdListShrink) {
            $res['AssumeAliyunIdList'] = $this->assumeAliyunIdListShrink;
        }

        if (null !== $this->checkIdsShrink) {
            $res['CheckIds'] = $this->checkIdsShrink;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }

        if (null !== $this->resourceGroupIdListShrink) {
            $res['ResourceGroupIdList'] = $this->resourceGroupIdListShrink;
        }

        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->tagKeysShrink) {
            $res['TagKeys'] = $this->tagKeysShrink;
        }

        if (null !== $this->tagListShrink) {
            $res['TagList'] = $this->tagListShrink;
        }

        if (null !== $this->tagValuesShrink) {
            $res['TagValues'] = $this->tagValuesShrink;
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
        if (isset($map['AssumeAliyunIdList'])) {
            $model->assumeAliyunIdListShrink = $map['AssumeAliyunIdList'];
        }

        if (isset($map['CheckIds'])) {
            $model->checkIdsShrink = $map['CheckIds'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }

        if (isset($map['ResourceGroupIdList'])) {
            $model->resourceGroupIdListShrink = $map['ResourceGroupIdList'];
        }

        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['TagKeys'])) {
            $model->tagKeysShrink = $map['TagKeys'];
        }

        if (isset($map['TagList'])) {
            $model->tagListShrink = $map['TagList'];
        }

        if (isset($map['TagValues'])) {
            $model->tagValuesShrink = $map['TagValues'];
        }

        return $model;
    }
}
