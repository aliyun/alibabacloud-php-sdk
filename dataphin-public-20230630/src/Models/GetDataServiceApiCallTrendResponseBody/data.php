<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data\callErrorImpactTrendList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data\callErrorTrendList;

class data extends Model
{
    /**
     * @var callErrorImpactTrendList[]
     */
    public $callErrorImpactTrendList;

    /**
     * @var callErrorTrendList[]
     */
    public $callErrorTrendList;
    protected $_name = [
        'callErrorImpactTrendList' => 'CallErrorImpactTrendList',
        'callErrorTrendList' => 'CallErrorTrendList',
    ];

    public function validate()
    {
        if (\is_array($this->callErrorImpactTrendList)) {
            Model::validateArray($this->callErrorImpactTrendList);
        }
        if (\is_array($this->callErrorTrendList)) {
            Model::validateArray($this->callErrorTrendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callErrorImpactTrendList) {
            if (\is_array($this->callErrorImpactTrendList)) {
                $res['CallErrorImpactTrendList'] = [];
                $n1 = 0;
                foreach ($this->callErrorImpactTrendList as $item1) {
                    $res['CallErrorImpactTrendList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callErrorTrendList) {
            if (\is_array($this->callErrorTrendList)) {
                $res['CallErrorTrendList'] = [];
                $n1 = 0;
                foreach ($this->callErrorTrendList as $item1) {
                    $res['CallErrorTrendList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallErrorImpactTrendList'])) {
            if (!empty($map['CallErrorImpactTrendList'])) {
                $model->callErrorImpactTrendList = [];
                $n1 = 0;
                foreach ($map['CallErrorImpactTrendList'] as $item1) {
                    $model->callErrorImpactTrendList[$n1] = callErrorImpactTrendList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CallErrorTrendList'])) {
            if (!empty($map['CallErrorTrendList'])) {
                $model->callErrorTrendList = [];
                $n1 = 0;
                foreach ($map['CallErrorTrendList'] as $item1) {
                    $model->callErrorTrendList[$n1] = callErrorTrendList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
