<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList;
use AlibabaCloud\Tea\Model;

class subMapDo extends Model
{
    /**
     * @description The information about message consumption by consumers in the group.
     *
     * @var clientList
     */
    public $clientList;

    /**
     * @description The number of consumption failures.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The ID of the consumer group.
     *
     * @example GID_test
     *
     * @var string
     */
    public $subGroupName;

    /**
     * @description The number of successful consumptions.
     *
     * @example 1
     *
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
