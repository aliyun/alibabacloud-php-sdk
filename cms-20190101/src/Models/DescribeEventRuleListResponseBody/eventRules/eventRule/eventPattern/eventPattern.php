<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\nameList;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var eventTypeList
     */
    public $eventTypeList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var levelList
     */
    public $levelList;

    /**
     * @var nameList
     */
    public $nameList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'product'       => 'Product',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = null !== $this->eventTypeList ? $this->eventTypeList->toMap() : null;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toMap() : null;
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
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = eventTypeList::fromMap($map['EventTypeList']);
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }
        if (isset($map['NameList'])) {
            $model->nameList = nameList::fromMap($map['NameList']);
        }

        return $model;
    }
}
