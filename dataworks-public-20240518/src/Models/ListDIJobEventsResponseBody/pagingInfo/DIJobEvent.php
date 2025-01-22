<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class DIJobEvent extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string
     */
    public $channels;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $dstSql;
    /**
     * @var string
     */
    public $dstTable;
    /**
     * @var string
     */
    public $failoverMessage;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $severity;
    /**
     * @var string
     */
    public $srcSql;
    /**
     * @var string
     */
    public $srcTable;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
