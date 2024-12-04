<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class DIJobEvent extends Model
{
    /**
     * @description The processing result of the DDL event. Valid values: Critical, Ignore, Normal, and Warning.
     *
     * @example Ignore
     *
     * @var string
     */
    public $action;

    /**
     * @description The alert notification method. Valid values: Phone, Mail, Sms, Ding, and Webhook.
     *
     * @example Phone
     *
     * @var string
     */
    public $channels;

    /**
     * @description The time when the event was created.
     *
     * @example 1663573162
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The alert details.
     *
     * @var string
     */
    public $detail;

    /**
     * @description The DDL statement of the destination table.
     *
     * @example alter table table2 ***
     *
     * @var string
     */
    public $dstSql;

    /**
     * @description The name of the destination table.
     *
     * @example table2
     *
     * @var string
     */
    public $dstTable;

    /**
     * @description The error logs for failovers.
     *
     * @example 2024-05-29 15:11:31,377 [main] INFO com.*.**.di.core.metrics.:21 []  {****}
     * 2024-05-29 15:11:31,384 [main] INFO *.aliyun.*.di.*.*.metrics.*:27 [] - Open MarioDiReporter
     * 2024-05-29 15:11:33,248 [flink-akka.*.*-dispatcher-17] INFO
     * @var string
     */
    public $failoverMessage;

    /**
     * @description The event ID.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The severity level of the alert. Valid values: Warning and Critical.
     *
     * @example Warning
     *
     * @var string
     */
    public $severity;

    /**
     * @description The DDL statement of the source table.
     *
     * @example alter table table1 ***
     *
     * @var string
     */
    public $srcSql;

    /**
     * @description The name of the source table.
     *
     * @example table1
     *
     * @var string
     */
    public $srcTable;

    /**
     * @description The sending status of an alert notification. Valid values: Success, Fail, and Silence.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the alert event.
     *
     *   Heartbeat
     *   Delay
     *   FailoverCount
     *   DdlReport
     *   ResourceUtilization
     *
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
