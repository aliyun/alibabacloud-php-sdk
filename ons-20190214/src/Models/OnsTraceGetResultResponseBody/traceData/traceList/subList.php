<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\subList\clientList;
use AlibabaCloud\Tea\Model;

class subList extends Model
{
    /**
     * @var clientList[]
     */
    public $clientList;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $subGroupName;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'clientList'   => 'ClientList',
        'failCount'    => 'FailCount',
        'subGroupName' => 'SubGroupName',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientList) {
            $res['ClientList'] = [];
            if (null !== $this->clientList && \is_array($this->clientList)) {
                $n = 0;
                foreach ($this->clientList as $item) {
                    $res['ClientList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->subGroupName) {
            $res['SubGroupName'] = $this->subGroupName;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientList'])) {
            if (!empty($map['ClientList'])) {
                $model->clientList = [];
                $n                 = 0;
                foreach ($map['ClientList'] as $item) {
                    $model->clientList[$n++] = null !== $item ? clientList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['SubGroupName'])) {
            $model->subGroupName = $map['SubGroupName'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
