<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList;
use AlibabaCloud\Tea\Model;

class DescribeDynamicTagRuleListResponseBody extends Model
{
    /**
     * @description The tag value.
     *
     * The `TagValue` and `TagValueMatchFunction` parameters must be used in pairs.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The tag value.
     *
     * For more information about how to obtain a tag value, see [DescribeTagKeyList](~~145557~~).
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The status of adding instances that meet the tag rule to the application group. Valid values:
     *
     *   `RUNNING`
     *   `FINISH`
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The ID of the region to which the tags belong.
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The logical operator that is used between conditional expressions. Valid values:
     *
     *   `and`
     *   `or`
     *
     * >  Only one logical operator can be used in a request.
     * @example 0D50523D-8D59-4A61-B58E-E2286ECFB3A9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag key.
     *
     * For more information about how to obtain a tag key, see [DescribeTagKeyList](~~145558~~).
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the tag rule.
     *
     * @var tagGroupList
     */
    public $tagGroupList;

    /**
     * @description The tag rules of application groups.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'tagGroupList' => 'TagGroupList',
        'total'        => 'Total',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagGroupList) {
            $res['TagGroupList'] = null !== $this->tagGroupList ? $this->tagGroupList->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDynamicTagRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagGroupList'])) {
            $model->tagGroupList = tagGroupList::fromMap($map['TagGroupList']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
