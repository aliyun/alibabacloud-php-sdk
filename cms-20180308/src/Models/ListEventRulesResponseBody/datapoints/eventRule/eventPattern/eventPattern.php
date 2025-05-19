<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern\eventPattern\nameList;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponseBody\datapoints\eventRule\eventPattern\eventPattern\statusList;

class eventPattern extends Model
{
    /**
     * @var eventTypeList
     */
    public $eventTypeList;

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
     * @var statusList
     */
    public $statusList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'levelList' => 'LevelList',
        'nameList' => 'NameList',
        'product' => 'Product',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (null !== $this->eventTypeList) {
            $this->eventTypeList->validate();
        }
        if (null !== $this->levelList) {
            $this->levelList->validate();
        }
        if (null !== $this->nameList) {
            $this->nameList->validate();
        }
        if (null !== $this->statusList) {
            $this->statusList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = null !== $this->eventTypeList ? $this->eventTypeList->toArray($noStream) : $this->eventTypeList;
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

        if (null !== $this->statusList) {
            $res['StatusList'] = null !== $this->statusList ? $this->statusList->toArray($noStream) : $this->statusList;
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
