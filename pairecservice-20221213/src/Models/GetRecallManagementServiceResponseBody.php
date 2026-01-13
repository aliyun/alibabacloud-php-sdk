<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetRecallManagementServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $currentRecallManagementServiceVersionId;

    /**
     * @var string
     */
    public $currentRecallManagementServiceVersionName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recallManagementServiceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentRecallManagementServiceVersionId' => 'CurrentRecallManagementServiceVersionId',
        'currentRecallManagementServiceVersionName' => 'CurrentRecallManagementServiceVersionName',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name' => 'Name',
        'recallManagementServiceId' => 'RecallManagementServiceId',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentRecallManagementServiceVersionId) {
            $res['CurrentRecallManagementServiceVersionId'] = $this->currentRecallManagementServiceVersionId;
        }

        if (null !== $this->currentRecallManagementServiceVersionName) {
            $res['CurrentRecallManagementServiceVersionName'] = $this->currentRecallManagementServiceVersionName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recallManagementServiceId) {
            $res['RecallManagementServiceId'] = $this->recallManagementServiceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentRecallManagementServiceVersionId'])) {
            $model->currentRecallManagementServiceVersionId = $map['CurrentRecallManagementServiceVersionId'];
        }

        if (isset($map['CurrentRecallManagementServiceVersionName'])) {
            $model->currentRecallManagementServiceVersionName = $map['CurrentRecallManagementServiceVersionName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecallManagementServiceId'])) {
            $model->recallManagementServiceId = $map['RecallManagementServiceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
