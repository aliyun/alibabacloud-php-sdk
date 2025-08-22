<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class PodItem extends Model
{
    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var PodItem[]
     */
    public $historyPods;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $podId;

    /**
     * @var string
     */
    public $podUid;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtStartTime' => 'GmtStartTime',
        'historyPods' => 'HistoryPods',
        'ip' => 'Ip',
        'nodeName' => 'NodeName',
        'podId' => 'PodId',
        'podUid' => 'PodUid',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->historyPods)) {
            Model::validateArray($this->historyPods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->historyPods) {
            if (\is_array($this->historyPods)) {
                $res['HistoryPods'] = [];
                $n1 = 0;
                foreach ($this->historyPods as $item1) {
                    $res['HistoryPods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['HistoryPods'])) {
            if (!empty($map['HistoryPods'])) {
                $model->historyPods = [];
                $n1 = 0;
                foreach ($map['HistoryPods'] as $item1) {
                    $model->historyPods[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
