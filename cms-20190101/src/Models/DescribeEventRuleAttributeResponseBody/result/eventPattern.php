<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\keywordFilterObj;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\nameList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\statusList;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @description The types of the event-triggered alert rules.
     *
     * @var eventTypeList
     */
    public $eventTypeList;

    /**
     * @var keywordFilterObj
     */
    public $keywordFilterObj;

    /**
     * @var levelList
     */
    public $levelList;

    /**
     * @var nameList
     */
    public $nameList;

    /**
     * @description The name of the cloud service.
     *
     * @example CloudMonitor
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $SQLFilter;

    /**
     * @var statusList
     */
    public $statusList;
    protected $_name = [
        'eventTypeList'    => 'EventTypeList',
        'keywordFilterObj' => 'KeywordFilterObj',
        'levelList'        => 'LevelList',
        'nameList'         => 'NameList',
        'product'          => 'Product',
        'SQLFilter'        => 'SQLFilter',
        'statusList'       => 'StatusList',
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
        if (null !== $this->keywordFilterObj) {
            $res['KeywordFilterObj'] = null !== $this->keywordFilterObj ? $this->keywordFilterObj->toMap() : null;
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
        if (null !== $this->statusList) {
            $res['StatusList'] = null !== $this->statusList ? $this->statusList->toMap() : null;
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
        if (isset($map['KeywordFilterObj'])) {
            $model->keywordFilterObj = keywordFilterObj::fromMap($map['KeywordFilterObj']);
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
        if (isset($map['StatusList'])) {
            $model->statusList = statusList::fromMap($map['StatusList']);
        }

        return $model;
    }
}
