<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 277
     *
     * @var string
     */
    public $id;

    /**
     * @example totp
     *
     * @var string
     */
    public $mfa;

    /**
     * @example password
     *
     * @var string
     */
    public $mobileLoginType;

    /**
     * @example password
     *
     * @var string
     */
    public $mobileMfaConfigType;

    /**
     * @example 1482,1355
     *
     * @var string
     */
    public $multiIdpInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @example password
     *
     * @var string
     */
    public $pcLoginType;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $status;

    /**
     * @example DingTalk
     *
     * @var string
     */
    public $type;

    /**
     * @example 2023-05-09T02:22:41.430Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'description'         => 'Description',
        'id'                  => 'Id',
        'mfa'                 => 'Mfa',
        'mobileLoginType'     => 'MobileLoginType',
        'mobileMfaConfigType' => 'MobileMfaConfigType',
        'multiIdpInfo'        => 'MultiIdpInfo',
        'name'                => 'Name',
        'pcLoginType'         => 'PcLoginType',
        'status'              => 'Status',
        'type'                => 'Type',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mfa) {
            $res['Mfa'] = $this->mfa;
        }
        if (null !== $this->mobileLoginType) {
            $res['MobileLoginType'] = $this->mobileLoginType;
        }
        if (null !== $this->mobileMfaConfigType) {
            $res['MobileMfaConfigType'] = $this->mobileMfaConfigType;
        }
        if (null !== $this->multiIdpInfo) {
            $res['MultiIdpInfo'] = $this->multiIdpInfo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pcLoginType) {
            $res['PcLoginType'] = $this->pcLoginType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mfa'])) {
            $model->mfa = $map['Mfa'];
        }
        if (isset($map['MobileLoginType'])) {
            $model->mobileLoginType = $map['MobileLoginType'];
        }
        if (isset($map['MobileMfaConfigType'])) {
            $model->mobileMfaConfigType = $map['MobileMfaConfigType'];
        }
        if (isset($map['MultiIdpInfo'])) {
            $model->multiIdpInfo = $map['MultiIdpInfo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PcLoginType'])) {
            $model->pcLoginType = $map['PcLoginType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
