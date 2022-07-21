<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\pods;

use AlibabaCloud\Tea\Model;

class historyPods extends Model
{
    /**
     * @description Pod创建时间（UTC）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description Pod结束时间（UTC）
     *
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @description Pod启动时间（UTC）
     *
     * @var string
     */
    public $gmtStartTime;

    /**
     * @description Pod Ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description Pod Id
     *
     * @var string
     */
    public $podId;

    /**
     * @description Pod UId
     *
     * @var string
     */
    public $podUid;

    /**
     * @description Pod状态
     *
     * @var string
     */
    public $status;

    /**
     * @description Pod类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtStartTime'  => 'GmtStartTime',
        'ip'            => 'Ip',
        'podId'         => 'PodId',
        'podUid'        => 'PodUid',
        'status'        => 'Status',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyPods
     */
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
