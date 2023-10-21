<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDynamicTagRuleListRequest extends Model
{
    /**
     * @description The ID of the tag rule.
     *
     * @example 004155fa-15ba-466d-b61a-***********
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Minimum value: 1. Default value: 30.
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The tag key.
     *
     * For more information about how to obtain a tag key, see [DescribeTagKeyList](~~145558~~).
     * @example tagkey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The ID of the region to which the tags belong.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $tagRegionId;

    /**
     * @description The tag value.
     *
     * For more information about how to obtain a tag value, see [DescribeTagKeyList](~~145557~~).
     * @example *
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'tagKey'           => 'TagKey',
        'tagRegionId'      => 'TagRegionId',
        'tagValue'         => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagRegionId) {
            $res['TagRegionId'] = $this->tagRegionId;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDynamicTagRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagRegionId'])) {
            $model->tagRegionId = $map['TagRegionId'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
