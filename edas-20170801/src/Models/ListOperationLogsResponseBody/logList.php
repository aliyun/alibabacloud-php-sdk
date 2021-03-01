<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListOperationLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $actionGroup;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $extraParameters;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'status'          => 'Status',
        'endTime'         => 'EndTime',
        'actionGroup'     => 'ActionGroup',
        'operatorId'      => 'OperatorId',
        'operatorName'    => 'OperatorName',
        'appId'           => 'AppId',
        'beginTime'       => 'BeginTime',
        'message'         => 'Message',
        'actionName'      => 'ActionName',
        'extraParameters' => 'ExtraParameters',
        'source'          => 'Source',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->actionGroup) {
            $res['ActionGroup'] = $this->actionGroup;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->extraParameters) {
            $res['ExtraParameters'] = $this->extraParameters;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ActionGroup'])) {
            $model->actionGroup = $map['ActionGroup'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ExtraParameters'])) {
            $model->extraParameters = $map['ExtraParameters'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
