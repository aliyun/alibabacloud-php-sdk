<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostCheckAdvicesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assumeAliyunIdListShrink;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $language;

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
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
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
        'checkId' => 'CheckId',
        'language' => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIdsShrink' => 'RegionIds',
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

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
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

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
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
