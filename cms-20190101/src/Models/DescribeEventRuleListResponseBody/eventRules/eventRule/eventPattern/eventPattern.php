<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\keywordFilter;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\nameList;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ECS123
     *
     * @var string
     */
    public $customFilters;

    /**
     * @description The keywords that are used to match events.
     *
     * @var eventTypeList
     */
    public $eventTypeList;

    /**
     * @description Queries event-triggered alert rules.
     *
     * @var keywordFilter
     */
    public $keywordFilter;

    /**
     * @description The type of the event-triggered alert rule.
     *
     * `*` indicates all types of alert rules.
     * @var levelList
     */
    public $levelList;

    /**
     * @description Indicates that logs are filtered based on the specified SQL statement. If the specified conditions are met, an alert is triggered.
     *
     * @var nameList
     */
    public $nameList;

    /**
     * @description The ID of the application group.
     *
     * @example CloudMonitor
     *
     * @var string
     */
    public $product;

    /**
     * @example ycccluster1 and (i-23ij0o82612 or Executed1) or Asimulated not 222
     *
     * @var string
     */
    public $SQLFilter;
    protected $_name = [
        'customFilters' => 'CustomFilters',
        'eventTypeList' => 'EventTypeList',
        'keywordFilter' => 'KeywordFilter',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
        'product'       => 'Product',
        'SQLFilter'     => 'SQLFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = null !== $this->eventTypeList ? $this->eventTypeList->toMap() : null;
        }
        if (null !== $this->keywordFilter) {
            $res['KeywordFilter'] = null !== $this->keywordFilter ? $this->keywordFilter->toMap() : null;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toMap() : null;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->SQLFilter) {
            $res['SQLFilter'] = $this->SQLFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
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
