<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbIssueRequest\fileList;
use AlibabaCloud\Tea\Model;

class ReportUserFbIssueRequest extends Model
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
    public $clientOsName;

    /**
     * @var string
     */
    public $clientSn;

    /**
     * @var string
     */
    public $clientVersion;

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
     * @var int
     */
    public $desktopType;

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
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var string
     */
    public $issueLabel;

    /**
     * @var int
     */
    public $occurTime;

    /**
     * @var string
     */
    public $reservedA;

    /**
     * @var string
     */
    public $reservedB;

    /**
     * @var string
     */
    public $telNo;

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
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'appId'         => 'AppId',
        'clientId'      => 'ClientId',
        'clientModel'   => 'ClientModel',
        'clientOsName'  => 'ClientOsName',
        'clientSn'      => 'ClientSn',
        'clientVersion' => 'ClientVersion',
        'customerId'    => 'CustomerId',
        'description'   => 'Description',
        'desktopId'     => 'DesktopId',
        'desktopType'   => 'DesktopType',
        'errorCode'     => 'ErrorCode',
        'errorMsg'      => 'ErrorMsg',
        'fbType'        => 'FbType',
        'fileList'      => 'FileList',
        'issueLabel'    => 'IssueLabel',
        'occurTime'     => 'OccurTime',
        'reservedA'     => 'ReservedA',
        'reservedB'     => 'ReservedB',
        'telNo'         => 'TelNo',
        'title'         => 'Title',
        'userEmail'     => 'UserEmail',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
        'workspaceId'   => 'WorkspaceId',
        'wyId'          => 'WyId',
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
        if (null !== $this->clientOsName) {
            $res['ClientOsName'] = $this->clientOsName;
        }
        if (null !== $this->clientSn) {
            $res['ClientSn'] = $this->clientSn;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
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
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
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
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->issueLabel) {
            $res['IssueLabel'] = $this->issueLabel;
        }
        if (null !== $this->occurTime) {
            $res['OccurTime'] = $this->occurTime;
        }
        if (null !== $this->reservedA) {
            $res['ReservedA'] = $this->reservedA;
        }
        if (null !== $this->reservedB) {
            $res['ReservedB'] = $this->reservedB;
        }
        if (null !== $this->telNo) {
            $res['TelNo'] = $this->telNo;
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
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportUserFbIssueRequest
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
        if (isset($map['ClientOsName'])) {
            $model->clientOsName = $map['ClientOsName'];
        }
        if (isset($map['ClientSn'])) {
            $model->clientSn = $map['ClientSn'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
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
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
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
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IssueLabel'])) {
            $model->issueLabel = $map['IssueLabel'];
        }
        if (isset($map['OccurTime'])) {
            $model->occurTime = $map['OccurTime'];
        }
        if (isset($map['ReservedA'])) {
            $model->reservedA = $map['ReservedA'];
        }
        if (isset($map['ReservedB'])) {
            $model->reservedB = $map['ReservedB'];
        }
        if (isset($map['TelNo'])) {
            $model->telNo = $map['TelNo'];
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
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
