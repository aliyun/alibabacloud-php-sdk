<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDynamicTagRuleListRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagRegionId;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tagKey' => 'TagKey',
        'tagRegionId' => 'TagRegionId',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
