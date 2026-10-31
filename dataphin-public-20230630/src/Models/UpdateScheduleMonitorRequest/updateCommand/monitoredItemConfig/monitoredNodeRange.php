<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredItemConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredItemConfig\monitoredNodeRange\filterRuleList;

class monitoredNodeRange extends Model
{
    /**
     * @var filterRuleList[]
     */
    public $filterRuleList;
    protected $_name = [
        'filterRuleList' => 'FilterRuleList',
    ];

    public function validate()
    {
        if (\is_array($this->filterRuleList)) {
            Model::validateArray($this->filterRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterRuleList) {
            if (\is_array($this->filterRuleList)) {
                $res['FilterRuleList'] = [];
                $n1 = 0;
                foreach ($this->filterRuleList as $item1) {
                    $res['FilterRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FilterRuleList'])) {
            if (!empty($map['FilterRuleList'])) {
                $model->filterRuleList = [];
                $n1 = 0;
                foreach ($map['FilterRuleList'] as $item1) {
                    $model->filterRuleList[$n1] = filterRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
