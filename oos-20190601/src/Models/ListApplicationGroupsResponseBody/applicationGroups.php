<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class applicationGroups extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $cmsGroupId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $deployParameters;

    /**
     * @var string
     */
    public $deployRegionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $importTagKey;

    /**
     * @var string
     */
    public $importTagValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'cmsGroupId' => 'CmsGroupId',
        'createDate' => 'CreateDate',
        'deployParameters' => 'DeployParameters',
        'deployRegionId' => 'DeployRegionId',
        'description' => 'Description',
        'errorDetail' => 'ErrorDetail',
        'errorType' => 'ErrorType',
        'importTagKey' => 'ImportTagKey',
        'importTagValue' => 'ImportTagValue',
        'name' => 'Name',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->cmsGroupId) {
            $res['CmsGroupId'] = $this->cmsGroupId;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->deployParameters) {
            $res['DeployParameters'] = $this->deployParameters;
        }

        if (null !== $this->deployRegionId) {
            $res['DeployRegionId'] = $this->deployRegionId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->importTagKey) {
            $res['ImportTagKey'] = $this->importTagKey;
        }

        if (null !== $this->importTagValue) {
            $res['ImportTagValue'] = $this->importTagValue;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CmsGroupId'])) {
            $model->cmsGroupId = $map['CmsGroupId'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DeployParameters'])) {
            $model->deployParameters = $map['DeployParameters'];
        }

        if (isset($map['DeployRegionId'])) {
            $model->deployRegionId = $map['DeployRegionId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['ImportTagKey'])) {
            $model->importTagKey = $map['ImportTagKey'];
        }

        if (isset($map['ImportTagValue'])) {
            $model->importTagValue = $map['ImportTagValue'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
