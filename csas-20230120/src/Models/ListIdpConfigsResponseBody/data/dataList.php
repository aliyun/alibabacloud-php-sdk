<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $mfa;
    /**
     * @var string
     */
    public $mobileLoginType;
    /**
     * @var string
     */
    public $mobileMfaConfigType;
    /**
     * @var string
     */
    public $multiIdpInfo;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $pcLoginType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
