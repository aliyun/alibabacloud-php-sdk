<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitorNodeRange;

use AlibabaCloud\Dara\Model;

class filterRuleList extends Model
{
    /**
     * @var string
     */
    public $filterKey;

    /**
     * @var string[]
     */
    public $filterValueList;

    /**
     * @var bool
     */
    public $isExclude;
    protected $_name = [
        'filterKey' => 'FilterKey',
        'filterValueList' => 'FilterValueList',
        'isExclude' => 'IsExclude',
    ];

    public function validate()
    {
        if (\is_array($this->filterValueList)) {
            Model::validateArray($this->filterValueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }

        if (null !== $this->filterValueList) {
            if (\is_array($this->filterValueList)) {
                $res['FilterValueList'] = [];
                $n1 = 0;
                foreach ($this->filterValueList as $item1) {
                    $res['FilterValueList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isExclude) {
            $res['IsExclude'] = $this->isExclude;
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
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }

        if (isset($map['FilterValueList'])) {
            if (!empty($map['FilterValueList'])) {
                $model->filterValueList = [];
                $n1 = 0;
                foreach ($map['FilterValueList'] as $item1) {
                    $model->filterValueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IsExclude'])) {
            $model->isExclude = $map['IsExclude'];
        }

        return $model;
    }
}
