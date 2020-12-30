<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountPasswordRequest extends Model
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
     * @var bool
     */
    public $isShort;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $enableKMS;

    /**
     * @var bool
     */
    public $useRandomPassword;
    protected $_name = [
        'regionId'          => 'RegionId',
        'accountName'       => 'AccountName',
        'isShort'           => 'IsShort',
        'password'          => 'Password',
        'enableKMS'         => 'EnableKMS',
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
        if (null !== $this->isShort) {
            $res['IsShort'] = $this->isShort;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->enableKMS) {
            $res['EnableKMS'] = $this->enableKMS;
        }
        if (null !== $this->useRandomPassword) {
            $res['UseRandomPassword'] = $this->useRandomPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountPasswordRequest
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
        if (isset($map['IsShort'])) {
            $model->isShort = $map['IsShort'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['EnableKMS'])) {
            $model->enableKMS = $map['EnableKMS'];
        }
        if (isset($map['UseRandomPassword'])) {
            $model->useRandomPassword = $map['UseRandomPassword'];
        }

        return $model;
    }
}
