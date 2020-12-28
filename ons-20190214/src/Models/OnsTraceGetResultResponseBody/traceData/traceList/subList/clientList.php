<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\subList;

use AlibabaCloud\Tea\Model;

class clientList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $subTime;

    /**
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @var string
     */
    public $subGroupName;

    /**
     * @var string
     */
    public $clientHost;

    /**
     * @var int
     */
    public $costTime;
    protected $_name = [
        'status'         => 'Status',
        'subTime'        => 'SubTime',
        'reconsumeTimes' => 'ReconsumeTimes',
        'subGroupName'   => 'SubGroupName',
        'clientHost'     => 'ClientHost',
        'costTime'       => 'CostTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subTime) {
            $res['SubTime'] = $this->subTime;
        }
        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }
        if (null !== $this->subGroupName) {
            $res['SubGroupName'] = $this->subGroupName;
        }
        if (null !== $this->clientHost) {
            $res['ClientHost'] = $this->clientHost;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubTime'])) {
            $model->subTime = $map['SubTime'];
        }
        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }
        if (isset($map['SubGroupName'])) {
            $model->subGroupName = $map['SubGroupName'];
        }
        if (isset($map['ClientHost'])) {
            $model->clientHost = $map['ClientHost'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        return $model;
    }
}
