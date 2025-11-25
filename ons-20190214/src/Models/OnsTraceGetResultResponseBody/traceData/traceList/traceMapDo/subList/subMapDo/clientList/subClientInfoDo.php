<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList;

use AlibabaCloud\Dara\Model;

class subClientInfoDo extends Model
{
    /**
     * @var string
     */
    public $clientHost;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subGroupName;

    /**
     * @var int
     */
    public $subTime;
    protected $_name = [
        'clientHost' => 'ClientHost',
        'costTime' => 'CostTime',
        'reconsumeTimes' => 'ReconsumeTimes',
        'status' => 'Status',
        'subGroupName' => 'SubGroupName',
        'subTime' => 'SubTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientHost) {
            $res['ClientHost'] = $this->clientHost;
        }

        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subGroupName) {
            $res['SubGroupName'] = $this->subGroupName;
        }

        if (null !== $this->subTime) {
            $res['SubTime'] = $this->subTime;
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
        if (isset($map['ClientHost'])) {
            $model->clientHost = $map['ClientHost'];
        }

        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubGroupName'])) {
            $model->subGroupName = $map['SubGroupName'];
        }

        if (isset($map['SubTime'])) {
            $model->subTime = $map['SubTime'];
        }

        return $model;
    }
}
