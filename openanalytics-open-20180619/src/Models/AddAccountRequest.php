<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class AddAccountRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $isShort;

    /**
     * @var bool
     */
    public $enableKMS;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $ramUid;

    /**
     * @var bool
     */
    public $useRandomPassword;
    protected $_name = [
        'regionId'          => 'RegionId',
        'accountName'       => 'AccountName',
        'password'          => 'Password',
        'isShort'           => 'IsShort',
        'enableKMS'         => 'EnableKMS',
        'remark'            => 'Remark',
        'ramUid'            => 'RamUid',
        'useRandomPassword' => 'UseRandomPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->isShort) {
            $res['IsShort'] = $this->isShort;
        }
        if (null !== $this->enableKMS) {
            $res['EnableKMS'] = $this->enableKMS;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ramUid) {
            $res['RamUid'] = $this->ramUid;
        }
        if (null !== $this->useRandomPassword) {
            $res['UseRandomPassword'] = $this->useRandomPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['IsShort'])) {
            $model->isShort = $map['IsShort'];
        }
        if (isset($map['EnableKMS'])) {
            $model->enableKMS = $map['EnableKMS'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RamUid'])) {
            $model->ramUid = $map['RamUid'];
        }
        if (isset($map['UseRandomPassword'])) {
            $model->useRandomPassword = $map['UseRandomPassword'];
        }

        return $model;
    }
}
