<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListUserFbIssuesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientModel;

    /**
     * @var string
     */
    public $clientSn;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $fbType;

    /**
     * @var int
     */
    public $issueId;

    /**
     * @var string
     */
    public $issueLabel;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userEmail;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $wasRead;
    protected $_name = [
        'appId'       => 'AppId',
        'clientId'    => 'ClientId',
        'clientModel' => 'ClientModel',
        'clientSn'    => 'ClientSn',
        'customerId'  => 'CustomerId',
        'description' => 'Description',
        'desktopId'   => 'DesktopId',
        'errorCode'   => 'ErrorCode',
        'errorMsg'    => 'ErrorMsg',
        'fbType'      => 'FbType',
        'issueId'     => 'IssueId',
        'issueLabel'  => 'IssueLabel',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'status'      => 'Status',
        'title'       => 'Title',
        'userEmail'   => 'UserEmail',
        'userId'      => 'UserId',
        'wasRead'     => 'WasRead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientModel) {
            $res['ClientModel'] = $this->clientModel;
        }
        if (null !== $this->clientSn) {
            $res['ClientSn'] = $this->clientSn;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fbType) {
            $res['FbType'] = $this->fbType;
        }
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }
        if (null !== $this->issueLabel) {
            $res['IssueLabel'] = $this->issueLabel;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userEmail) {
            $res['UserEmail'] = $this->userEmail;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->wasRead) {
            $res['WasRead'] = $this->wasRead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserFbIssuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientModel'])) {
            $model->clientModel = $map['ClientModel'];
        }
        if (isset($map['ClientSn'])) {
            $model->clientSn = $map['ClientSn'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['FbType'])) {
            $model->fbType = $map['FbType'];
        }
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }
        if (isset($map['IssueLabel'])) {
            $model->issueLabel = $map['IssueLabel'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserEmail'])) {
            $model->userEmail = $map['UserEmail'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WasRead'])) {
            $model->wasRead = $map['WasRead'];
        }

        return $model;
    }
}
