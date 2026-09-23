<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos\applicationProvisionInfo\delegatedScope;

class applicationProvisionInfo extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $appCategory;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assignmentType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $needPrincipalConsent;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'accountId' => 'AccountId',
        'appCategory' => 'AppCategory',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'assignmentType' => 'AssignmentType',
        'createDate' => 'CreateDate',
        'delegatedScope' => 'DelegatedScope',
        'displayName' => 'DisplayName',
        'needPrincipalConsent' => 'NeedPrincipalConsent',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        if (null !== $this->delegatedScope) {
            $this->delegatedScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->appCategory) {
            $res['AppCategory'] = $this->appCategory;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assignmentType) {
            $res['AssignmentType'] = $this->assignmentType;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toArray($noStream) : $this->delegatedScope;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->needPrincipalConsent) {
            $res['NeedPrincipalConsent'] = $this->needPrincipalConsent;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AppCategory'])) {
            $model->appCategory = $map['AppCategory'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssignmentType'])) {
            $model->assignmentType = $map['AssignmentType'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DelegatedScope'])) {
            $model->delegatedScope = delegatedScope::fromMap($map['DelegatedScope']);
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['NeedPrincipalConsent'])) {
            $model->needPrincipalConsent = $map['NeedPrincipalConsent'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
