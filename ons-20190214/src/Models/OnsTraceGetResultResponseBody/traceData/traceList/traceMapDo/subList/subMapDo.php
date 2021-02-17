<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList;
use AlibabaCloud\Tea\Model;

class subMapDo extends Model
{
    /**
     * @var clientList
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
            $res['ClientList'] = null !== $this->clientList ? $this->clientList->toMap() : null;
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
     * @return subMapDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientList'])) {
            $model->clientList = clientList::fromMap($map['ClientList']);
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
