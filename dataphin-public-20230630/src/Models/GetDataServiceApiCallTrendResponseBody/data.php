<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data\callErrorImpactTrendList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data\callErrorTrendList;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callErrorImpactTrendList) {
            $res['CallErrorImpactTrendList'] = [];
            if (null !== $this->callErrorImpactTrendList && \is_array($this->callErrorImpactTrendList)) {
                $n = 0;
                foreach ($this->callErrorImpactTrendList as $item) {
                    $res['CallErrorImpactTrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->callErrorTrendList) {
            $res['CallErrorTrendList'] = [];
            if (null !== $this->callErrorTrendList && \is_array($this->callErrorTrendList)) {
                $n = 0;
                foreach ($this->callErrorTrendList as $item) {
                    $res['CallErrorTrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallErrorImpactTrendList'])) {
            if (!empty($map['CallErrorImpactTrendList'])) {
                $model->callErrorImpactTrendList = [];
                $n = 0;
                foreach ($map['CallErrorImpactTrendList'] as $item) {
                    $model->callErrorImpactTrendList[$n++] = null !== $item ? callErrorImpactTrendList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CallErrorTrendList'])) {
            if (!empty($map['CallErrorTrendList'])) {
                $model->callErrorTrendList = [];
                $n = 0;
                foreach ($map['CallErrorTrendList'] as $item) {
                    $model->callErrorTrendList[$n++] = null !== $item ? callErrorTrendList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
