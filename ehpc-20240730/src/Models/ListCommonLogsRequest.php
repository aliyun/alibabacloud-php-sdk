<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListCommonLogsRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionName;

    /**
     * @var string
     */
    public $actionStatus;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $from;

    /**
     * @var bool
     */
    public $isReverse;

    /**
     * @var string
     */
    public $logRequestId;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $operatorUid;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'actionName' => 'ActionName',
        'actionStatus' => 'ActionStatus',
        'clusterId' => 'ClusterId',
        'from' => 'From',
        'isReverse' => 'IsReverse',
        'logRequestId' => 'LogRequestId',
        'logType' => 'LogType',
        'operatorUid' => 'OperatorUid',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resource' => 'Resource',
        'to' => 'To',
    ];

    public function validate()
    {
        if (\is_array($this->actionName)) {
            Model::validateArray($this->actionName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            if (\is_array($this->actionName)) {
                $res['ActionName'] = [];
                $n1 = 0;
                foreach ($this->actionName as $item1) {
                    $res['ActionName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->actionStatus) {
            $res['ActionStatus'] = $this->actionStatus;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->isReverse) {
            $res['IsReverse'] = $this->isReverse;
        }

        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['ActionName'])) {
            if (!empty($map['ActionName'])) {
                $model->actionName = [];
                $n1 = 0;
                foreach ($map['ActionName'] as $item1) {
                    $model->actionName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ActionStatus'])) {
            $model->actionStatus = $map['ActionStatus'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['IsReverse'])) {
            $model->isReverse = $map['IsReverse'];
        }

        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
