<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMessageResponseBody;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $projectId;

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
    public $type;

    /**
     * @var int
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $parameter;

    /**
     * @var int
     */
    public $predictSendCnt;

    /**
     * @var int
     */
    public $ackCnt;

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
    public $audit;

    /**
     * @var string
     */
    public $auditMsg;
    protected $_name = [
        'id'             => 'Id',
        'projectId'      => 'ProjectId',
        'appName'        => 'AppName',
        'appKey'         => 'AppKey',
        'type'           => 'Type',
        'sendStatus'     => 'SendStatus',
        'title'          => 'Title',
        'desc'           => 'Desc',
        'action'         => 'Action',
        'uri'            => 'Uri',
        'parameter'      => 'Parameter',
        'predictSendCnt' => 'PredictSendCnt',
        'ackCnt'         => 'AckCnt',
        'gmtCreateTime'  => 'GmtCreateTime',
        'exipiredTime'   => 'ExipiredTime',
        'audit'          => 'Audit',
        'auditMsg'       => 'AuditMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = $this->parameter;
        }
        if (null !== $this->predictSendCnt) {
            $res['PredictSendCnt'] = $this->predictSendCnt;
        }
        if (null !== $this->ackCnt) {
            $res['AckCnt'] = $this->ackCnt;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->exipiredTime) {
            $res['ExipiredTime'] = $this->exipiredTime;
        }
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->auditMsg) {
            $res['AuditMsg'] = $this->auditMsg;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['Parameter'])) {
            $model->parameter = $map['Parameter'];
        }
        if (isset($map['PredictSendCnt'])) {
            $model->predictSendCnt = $map['PredictSendCnt'];
        }
        if (isset($map['AckCnt'])) {
            $model->ackCnt = $map['AckCnt'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['ExipiredTime'])) {
            $model->exipiredTime = $map['ExipiredTime'];
        }
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['AuditMsg'])) {
            $model->auditMsg = $map['AuditMsg'];
        }

        return $model;
    }
}
