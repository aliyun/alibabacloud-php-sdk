<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\keywordFilter;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\nameList;

class eventPattern extends Model
{
    /**
     * @var string
     */
    public $customFilters;

    /**
     * @var eventTypeList
     */
    public $eventTypeList;

    /**
     * @var keywordFilter
     */
    public $keywordFilter;

    /**
     * @var levelList
     */
    public $levelList;

    /**
     * @var nameList
     */
    public $nameList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $SQLFilter;
    protected $_name = [
        'customFilters' => 'CustomFilters',
        'eventTypeList' => 'EventTypeList',
        'keywordFilter' => 'KeywordFilter',
        'levelList' => 'LevelList',
        'nameList' => 'NameList',
        'product' => 'Product',
        'SQLFilter' => 'SQLFilter',
    ];

    public function validate()
    {
        if (null !== $this->eventTypeList) {
            $this->eventTypeList->validate();
        }
        if (null !== $this->keywordFilter) {
            $this->keywordFilter->validate();
        }
        if (null !== $this->levelList) {
            $this->levelList->validate();
        }
        if (null !== $this->nameList) {
            $this->nameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }

        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = null !== $this->eventTypeList ? $this->eventTypeList->toArray($noStream) : $this->eventTypeList;
        }

        if (null !== $this->keywordFilter) {
            $res['KeywordFilter'] = null !== $this->keywordFilter ? $this->keywordFilter->toArray($noStream) : $this->keywordFilter;
        }

        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toArray($noStream) : $this->levelList;
        }

        if (null !== $this->nameList) {
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toArray($noStream) : $this->nameList;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->SQLFilter) {
            $res['SQLFilter'] = $this->SQLFilter;
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
        if (isset($map['CustomFilters'])) {
            $model->customFilters = $map['CustomFilters'];
        }

        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = eventTypeList::fromMap($map['EventTypeList']);
        }

        if (isset($map['KeywordFilter'])) {
            $model->keywordFilter = keywordFilter::fromMap($map['KeywordFilter']);
        }

        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }

        if (isset($map['NameList'])) {
            $model->nameList = nameList::fromMap($map['NameList']);
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['SQLFilter'])) {
            $model->SQLFilter = $map['SQLFilter'];
        }

        return $model;
    }
}
