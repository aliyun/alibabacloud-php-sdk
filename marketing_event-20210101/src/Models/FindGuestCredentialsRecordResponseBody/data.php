<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $admin;

    /**
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
     * @var string
     */
    public $credentialsCode;

    /**
     * @var string
     */
    public $credentialsName;

    /**
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
     * @var int
     */
    public $status;
    protected $_name = [
        'admin' => 'Admin',
        'channelId' => 'ChannelId',
        'channelLevelInfo' => 'ChannelLevelInfo',
        'companyName' => 'CompanyName',
        'credentialsCode' => 'CredentialsCode',
        'credentialsName' => 'CredentialsName',
        'idNumber' => 'IdNumber',
        'idType' => 'IdType',
        'name' => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->admin)) {
            Model::validateArray($this->admin);
        }
        if (null !== $this->channelLevelInfo) {
            $this->channelLevelInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->admin) {
            if (\is_array($this->admin)) {
                $res['Admin'] = [];
                foreach ($this->admin as $key1 => $value1) {
                    $res['Admin'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->channelLevelInfo) {
            $res['ChannelLevelInfo'] = null !== $this->channelLevelInfo ? $this->channelLevelInfo->toArray($noStream) : $this->channelLevelInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Admin'])) {
            if (!empty($map['Admin'])) {
                $model->admin = [];
                foreach ($map['Admin'] as $key1 => $value1) {
                    $model->admin[$key1] = $value1;
                }
            }
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
