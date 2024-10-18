<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class DIJobEvent extends Model
{
    /**
     * @example Ignore
     *
     * @var string
     */
    public $action;

    /**
     * @example Phone
     *
     * @var string
     */
    public $channels;

    /**
     * @example 1663573162
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $detail;

    /**
     * @example alter table table2 ***
     *
     * @var string
     */
    public $dstSql;

    /**
     * @example table2
     *
     * @var string
     */
    public $dstTable;

    /**
     * @example 2024-05-29 15:11:31,377 [main] INFO com.*.**.di.core.metrics.:21 []  {****}
     * 2024-05-29 15:11:31,384 [main] INFO *.aliyun.*.di.*.*.metrics.*:27 [] - Open MarioDiReporter
     * 2024-05-29 15:11:33,248 [flink-akka.*.*-dispatcher-17] INFO
     * @var string
     */
    public $failoverMessage;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example Warning
     *
     * @var string
     */
    public $severity;

    /**
     * @example alter table table1 ***
     *
     * @var string
     */
    public $srcSql;

    /**
     * @example table1
     *
     * @var string
     */
    public $srcTable;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example Delay
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action'          => 'Action',
        'channels'        => 'Channels',
        'createTime'      => 'CreateTime',
        'detail'          => 'Detail',
        'dstSql'          => 'DstSql',
        'dstTable'        => 'DstTable',
        'failoverMessage' => 'FailoverMessage',
        'id'              => 'Id',
        'severity'        => 'Severity',
        'srcSql'          => 'SrcSql',
        'srcTable'        => 'SrcTable',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->dstSql) {
            $res['DstSql'] = $this->dstSql;
        }
        if (null !== $this->dstTable) {
            $res['DstTable'] = $this->dstTable;
        }
        if (null !== $this->failoverMessage) {
            $res['FailoverMessage'] = $this->failoverMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->srcSql) {
            $res['SrcSql'] = $this->srcSql;
        }
        if (null !== $this->srcTable) {
            $res['SrcTable'] = $this->srcTable;
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
     * @return DIJobEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DstSql'])) {
            $model->dstSql = $map['DstSql'];
        }
        if (isset($map['DstTable'])) {
            $model->dstTable = $map['DstTable'];
        }
        if (isset($map['FailoverMessage'])) {
            $model->failoverMessage = $map['FailoverMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['SrcSql'])) {
            $model->srcSql = $map['SrcSql'];
        }
        if (isset($map['SrcTable'])) {
            $model->srcTable = $map['SrcTable'];
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
