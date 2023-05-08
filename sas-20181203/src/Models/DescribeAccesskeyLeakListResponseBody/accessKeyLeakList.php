<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody;

use AlibabaCloud\Tea\Model;

class accessKeyLeakList extends Model
{
    /**
     * @description The ID of the AccessKey pair that is leaked.
     *
     * @example LTAI4Fytv7ALKzkNVBV6****
     *
     * @var string
     */
    public $accesskeyId;

    /**
     * @description The name of the Alibaba Cloud account that is affected.
     *
     * @example testAccountName
     *
     * @var string
     */
    public $aliUserName;

    /**
     * @description The platform to which the asset belongs. The value is fixed as **Cloud platform**.
     *
     * @example Cloud platform
     *
     * @var string
     */
    public $asset;

    /**
     * @description The time when the AccessKey pair leak is handled.
     *
     * @example 2020-12-03 21:23:38
     *
     * @var string
     */
    public $dealTime;

    /**
     * @description The method to handle the AccessKey pair leak. Valid values:
     *
     *   **pending**: The AccessKey pair leak is unhandled.
     *   **manual**: The AccessKey pair leak is manually handled.
     *   **disable**: The AccessKey pair leak is disabled.
     *   **add-whitelist**: The AccessKey pair leak is added to the whitelist.
     *
     * @example pending
     *
     * @var string
     */
    public $dealType;

    /**
     * @description The time when the AccessKey pair leak is first detected. The value of this parameter is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1612357897000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The primary key ID of the database.
     *
     * @example 389357
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the AccessKey pair leak is handled. Valid values:
     *
     *   **pending**: unhandled
     *   **dealed**: handled
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the leak. The value is fixed as **AccessKey**.
     *
     * @example AccessKey
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the platform on which the AccessKey pair leak is detected.
     *
     * @example https://github.com/hht312/test-ak/blob/0e466d2ecce55b4c924d773a058e5dc602d8****\/1001
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the account to which the leaked AccessKey pair belongs. Valid values:
     *
     *   **master**: Alibaba Cloud account
     *   **ram**: RAM user
     *
     * @example master
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'accesskeyId' => 'AccesskeyId',
        'aliUserName' => 'AliUserName',
        'asset'       => 'Asset',
        'dealTime'    => 'DealTime',
        'dealType'    => 'DealType',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'status'      => 'Status',
        'type'        => 'Type',
        'url'         => 'Url',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accesskeyId) {
            $res['AccesskeyId'] = $this->accesskeyId;
        }
        if (null !== $this->aliUserName) {
            $res['AliUserName'] = $this->aliUserName;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealType) {
            $res['DealType'] = $this->dealType;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKeyLeakList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccesskeyId'])) {
            $model->accesskeyId = $map['AccesskeyId'];
        }
        if (isset($map['AliUserName'])) {
            $model->aliUserName = $map['AliUserName'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealType'])) {
            $model->dealType = $map['DealType'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
