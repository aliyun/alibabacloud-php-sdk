<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $completedCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $fireTime;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var int
     */
    public $completedRate;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'         => 'Status',
        'data'           => 'Data',
        'dataType'       => 'DataType',
        'taskName'       => 'TaskName',
        'completedCount' => 'CompletedCount',
        'totalCount'     => 'TotalCount',
        'templateName'   => 'TemplateName',
        'stopTime'       => 'StopTime',
        'bizType'        => 'BizType',
        'resource'       => 'Resource',
        'templateCode'   => 'TemplateCode',
        'fireTime'       => 'FireTime',
        'completeTime'   => 'CompleteTime',
        'completedRate'  => 'CompletedRate',
        'id'             => 'Id',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->completedRate) {
            $res['CompletedRate'] = $this->completedRate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['CompletedCount'])) {
            $model->completedCount = $map['CompletedCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CompletedRate'])) {
            $model->completedRate = $map['CompletedRate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
