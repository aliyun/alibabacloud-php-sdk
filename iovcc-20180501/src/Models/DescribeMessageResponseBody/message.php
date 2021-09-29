<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMessageResponseBody;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $predictSendCnt;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $auditMsg;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var int
     */
    public $gmtCreateTime;

    /**
     * @var int
     */
    public $exipiredTime;

    /**
     * @var int
     */
    public $ackCnt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $parameter;

    /**
     * @var int
     */
    public $audit;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $sendStatus;
    protected $_name = [
        'type'           => 'Type',
        'action'         => 'Action',
        'projectId'      => 'ProjectId',
        'predictSendCnt' => 'PredictSendCnt',
        'uri'            => 'Uri',
        'desc'           => 'Desc',
        'auditMsg'       => 'AuditMsg',
        'appName'        => 'AppName',
        'appKey'         => 'AppKey',
        'gmtCreateTime'  => 'GmtCreateTime',
        'exipiredTime'   => 'ExipiredTime',
        'ackCnt'         => 'AckCnt',
        'title'          => 'Title',
        'parameter'      => 'Parameter',
        'audit'          => 'Audit',
        'id'             => 'Id',
        'sendStatus'     => 'SendStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->predictSendCnt) {
            $res['PredictSendCnt'] = $this->predictSendCnt;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->auditMsg) {
            $res['AuditMsg'] = $this->auditMsg;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->exipiredTime) {
            $res['ExipiredTime'] = $this->exipiredTime;
        }
        if (null !== $this->ackCnt) {
            $res['AckCnt'] = $this->ackCnt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = $this->parameter;
        }
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PredictSendCnt'])) {
            $model->predictSendCnt = $map['PredictSendCnt'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['AuditMsg'])) {
            $model->auditMsg = $map['AuditMsg'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['ExipiredTime'])) {
            $model->exipiredTime = $map['ExipiredTime'];
        }
        if (isset($map['AckCnt'])) {
            $model->ackCnt = $map['AckCnt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Parameter'])) {
            $model->parameter = $map['Parameter'];
        }
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        return $model;
    }
}
