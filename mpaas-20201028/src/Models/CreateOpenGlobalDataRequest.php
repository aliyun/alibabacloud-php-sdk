<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreateOpenGlobalDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appMaxVersion;

    /**
     * @var string
     */
    public $appMinVersion;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $extAttrStr;

    /**
     * @var int
     */
    public $maxUid;

    /**
     * @var int
     */
    public $minUid;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $thirdMsgId;

    /**
     * @var string
     */
    public $uids;

    /**
     * @var int
     */
    public $validTimeEnd;

    /**
     * @var int
     */
    public $validTimeStart;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appMaxVersion' => 'AppMaxVersion',
        'appMinVersion' => 'AppMinVersion',
        'bizType' => 'BizType',
        'extAttrStr' => 'ExtAttrStr',
        'maxUid' => 'MaxUid',
        'minUid' => 'MinUid',
        'osType' => 'OsType',
        'payload' => 'Payload',
        'tenantId' => 'TenantId',
        'thirdMsgId' => 'ThirdMsgId',
        'uids' => 'Uids',
        'validTimeEnd' => 'ValidTimeEnd',
        'validTimeStart' => 'ValidTimeStart',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appMaxVersion) {
            $res['AppMaxVersion'] = $this->appMaxVersion;
        }

        if (null !== $this->appMinVersion) {
            $res['AppMinVersion'] = $this->appMinVersion;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->extAttrStr) {
            $res['ExtAttrStr'] = $this->extAttrStr;
        }

        if (null !== $this->maxUid) {
            $res['MaxUid'] = $this->maxUid;
        }

        if (null !== $this->minUid) {
            $res['MinUid'] = $this->minUid;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->thirdMsgId) {
            $res['ThirdMsgId'] = $this->thirdMsgId;
        }

        if (null !== $this->uids) {
            $res['Uids'] = $this->uids;
        }

        if (null !== $this->validTimeEnd) {
            $res['ValidTimeEnd'] = $this->validTimeEnd;
        }

        if (null !== $this->validTimeStart) {
            $res['ValidTimeStart'] = $this->validTimeStart;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppMaxVersion'])) {
            $model->appMaxVersion = $map['AppMaxVersion'];
        }

        if (isset($map['AppMinVersion'])) {
            $model->appMinVersion = $map['AppMinVersion'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ExtAttrStr'])) {
            $model->extAttrStr = $map['ExtAttrStr'];
        }

        if (isset($map['MaxUid'])) {
            $model->maxUid = $map['MaxUid'];
        }

        if (isset($map['MinUid'])) {
            $model->minUid = $map['MinUid'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ThirdMsgId'])) {
            $model->thirdMsgId = $map['ThirdMsgId'];
        }

        if (isset($map['Uids'])) {
            $model->uids = $map['Uids'];
        }

        if (isset($map['ValidTimeEnd'])) {
            $model->validTimeEnd = $map['ValidTimeEnd'];
        }

        if (isset($map['ValidTimeStart'])) {
            $model->validTimeStart = $map['ValidTimeStart'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
