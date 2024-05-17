<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateOpenSingleDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $bizType;

    /**
     * @var bool
     */
    public $checkOnline;

    /**
     * @var string
     */
    public $extAttrStr;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $linkToken;

    /**
     * @var string
     */
    public $osType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $payload;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $thirdMsgId;

    /**
     * @var int
     */
    public $validTimeEnd;

    /**
     * @var int
     */
    public $validTimeStart;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'          => 'AppId',
        'appMaxVersion'  => 'AppMaxVersion',
        'appMinVersion'  => 'AppMinVersion',
        'bizType'        => 'BizType',
        'checkOnline'    => 'CheckOnline',
        'extAttrStr'     => 'ExtAttrStr',
        'linkToken'      => 'LinkToken',
        'osType'         => 'OsType',
        'payload'        => 'Payload',
        'thirdMsgId'     => 'ThirdMsgId',
        'validTimeEnd'   => 'ValidTimeEnd',
        'validTimeStart' => 'ValidTimeStart',
        'workspaceId'    => 'WorkspaceId',
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
        if (null !== $this->appMaxVersion) {
            $res['AppMaxVersion'] = $this->appMaxVersion;
        }
        if (null !== $this->appMinVersion) {
            $res['AppMinVersion'] = $this->appMinVersion;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->checkOnline) {
            $res['CheckOnline'] = $this->checkOnline;
        }
        if (null !== $this->extAttrStr) {
            $res['ExtAttrStr'] = $this->extAttrStr;
        }
        if (null !== $this->linkToken) {
            $res['LinkToken'] = $this->linkToken;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->thirdMsgId) {
            $res['ThirdMsgId'] = $this->thirdMsgId;
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

    /**
     * @param array $map
     *
     * @return CreateOpenSingleDataRequest
     */
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
        if (isset($map['CheckOnline'])) {
            $model->checkOnline = $map['CheckOnline'];
        }
        if (isset($map['ExtAttrStr'])) {
            $model->extAttrStr = $map['ExtAttrStr'];
        }
        if (isset($map['LinkToken'])) {
            $model->linkToken = $map['LinkToken'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['ThirdMsgId'])) {
            $model->thirdMsgId = $map['ThirdMsgId'];
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
