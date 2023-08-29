<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo;

use AlibabaCloud\Tea\Model;

class mobileTestFlightConfigDO extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $installAmount;

    /**
     * @var string
     */
    public $invalidTime;

    /**
     * @var int
     */
    public $upgradeId;
    protected $_name = [
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'installAmount' => 'InstallAmount',
        'invalidTime'   => 'InvalidTime',
        'upgradeId'     => 'UpgradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->installAmount) {
            $res['InstallAmount'] = $this->installAmount;
        }
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }
        if (null !== $this->upgradeId) {
            $res['UpgradeId'] = $this->upgradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mobileTestFlightConfigDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstallAmount'])) {
            $model->installAmount = $map['InstallAmount'];
        }
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }
        if (isset($map['UpgradeId'])) {
            $model->upgradeId = $map['UpgradeId'];
        }

        return $model;
    }
}
