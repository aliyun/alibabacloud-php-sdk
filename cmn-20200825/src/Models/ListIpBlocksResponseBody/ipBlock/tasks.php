<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock\tasks\ipList;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example PING-TEST
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2022-11-20 11:12:43
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2022-11-20 11:12:43
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 127.0.0.1/28
     *
     * @var string
     */
    public $ip;

    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @example OK
     *
     * @var string
     */
    public $msg;

    /**
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @example b302f0eb-c97a-44f8-8557-320e4da7a68c
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 14
     *
     * @var int
     */
    public $totalIpCount;
    protected $_name = [
        'domain'          => 'Domain',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'ip'              => 'Ip',
        'ipList'          => 'IpList',
        'msg'             => 'Msg',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'totalIpCount'    => 'TotalIpCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalIpCount) {
            $res['TotalIpCount'] = $this->totalIpCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalIpCount'])) {
            $model->totalIpCount = $map['TotalIpCount'];
        }

        return $model;
    }
}
