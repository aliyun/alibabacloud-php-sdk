<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models;

use AlibabaCloud\Dara\Model;

class ReadMessageListRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $callerProtocol;

    /**
     * @var int
     */
    public $classId;

    /**
     * @var string
     */
    public $clientSource;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $cookies;

    /**
     * @var string
     */
    public $groupCode;

    /**
     * @var string
     */
    public $history;

    /**
     * @var string
     */
    public $loc;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $srcUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tenantCode;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uidType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'bizName' => 'BizName',
        'callerProtocol' => 'CallerProtocol',
        'classId' => 'ClassId',
        'clientSource' => 'ClientSource',
        'content' => 'Content',
        'cookies' => 'Cookies',
        'groupCode' => 'GroupCode',
        'history' => 'History',
        'loc' => 'Loc',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'srcUrl' => 'SrcUrl',
        'status' => 'Status',
        'tenantCode' => 'TenantCode',
        'title' => 'Title',
        'uidType' => 'UidType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->callerProtocol) {
            $res['CallerProtocol'] = $this->callerProtocol;
        }

        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }

        if (null !== $this->clientSource) {
            $res['ClientSource'] = $this->clientSource;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }

        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }

        if (null !== $this->history) {
            $res['History'] = $this->history;
        }

        if (null !== $this->loc) {
            $res['Loc'] = $this->loc;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->srcUrl) {
            $res['SrcUrl'] = $this->srcUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->uidType) {
            $res['UidType'] = $this->uidType;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['CallerProtocol'])) {
            $model->callerProtocol = $map['CallerProtocol'];
        }

        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }

        if (isset($map['ClientSource'])) {
            $model->clientSource = $map['ClientSource'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }

        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }

        if (isset($map['History'])) {
            $model->history = $map['History'];
        }

        if (isset($map['Loc'])) {
            $model->loc = $map['Loc'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SrcUrl'])) {
            $model->srcUrl = $map['SrcUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UidType'])) {
            $model->uidType = $map['UidType'];
        }

        return $model;
    }
}
