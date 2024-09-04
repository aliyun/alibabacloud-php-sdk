<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody;

use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $admin;

    /**
     * @example 1401
     *
     * @var int
     */
    public $channelId;

    /**
     * @var channelLevelInfo
     */
    public $channelLevelInfo;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @example 3602-10010215
     *
     * @var string
     */
    public $credentialsCode;

    /**
     * @var string
     */
    public $credentialsName;

    /**
     * @example IjEqZpp8Wn29+sqOr3hxXuOqn6CyKYNSQ5dmMA0txiM=
     *
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'admin'            => 'Admin',
        'channelId'        => 'ChannelId',
        'channelLevelInfo' => 'ChannelLevelInfo',
        'companyName'      => 'CompanyName',
        'credentialsCode'  => 'CredentialsCode',
        'credentialsName'  => 'CredentialsName',
        'idNumber'         => 'IdNumber',
        'idType'           => 'IdType',
        'name'             => 'Name',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admin) {
            $res['Admin'] = $this->admin;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelLevelInfo) {
            $res['ChannelLevelInfo'] = null !== $this->channelLevelInfo ? $this->channelLevelInfo->toMap() : null;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->credentialsCode) {
            $res['CredentialsCode'] = $this->credentialsCode;
        }
        if (null !== $this->credentialsName) {
            $res['CredentialsName'] = $this->credentialsName;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Admin'])) {
            $model->admin = $map['Admin'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelLevelInfo'])) {
            $model->channelLevelInfo = channelLevelInfo::fromMap($map['ChannelLevelInfo']);
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['CredentialsCode'])) {
            $model->credentialsCode = $map['CredentialsCode'];
        }
        if (isset($map['CredentialsName'])) {
            $model->credentialsName = $map['CredentialsName'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
