<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\nameList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\statusList;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var eventTypeList
     */
    public $eventTypeList;

    /**
     * @description This topic provides an example on how to query the details of an event-triggered alert rule named `testRule`.
     *
     * @var levelList
     */
    public $levelList;

    /**
     * @var nameList
     */
    public $nameList;

    /**
     * @description The name of the event.
     *
     * @example CloudMonitor
     *
     * @var string
     */
    public $product;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @var statusList
     */
    public $statusList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
        'product'       => 'Product',
        'statusList'    => 'StatusList',
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
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toMap() : null;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }
        if (isset($map['NameList'])) {
            $model->nameList = nameList::fromMap($map['NameList']);
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = statusList::fromMap($map['StatusList']);
        }

        return $model;
    }
}
