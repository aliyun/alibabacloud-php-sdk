<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo\mobileTestFlightConfigDO;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo\upgradeBaseInfoDO;
use AlibabaCloud\Tea\Model;

class packageInfo extends Model
{
    /**
     * @var mobileTestFlightConfigDO
     */
    public $mobileTestFlightConfigDO;

    /**
     * @var upgradeBaseInfoDO
     */
    public $upgradeBaseInfoDO;
    protected $_name = [
        'mobileTestFlightConfigDO' => 'MobileTestFlightConfigDO',
        'upgradeBaseInfoDO'        => 'UpgradeBaseInfoDO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobileTestFlightConfigDO) {
            $res['MobileTestFlightConfigDO'] = null !== $this->mobileTestFlightConfigDO ? $this->mobileTestFlightConfigDO->toMap() : null;
        }
        if (null !== $this->upgradeBaseInfoDO) {
            $res['UpgradeBaseInfoDO'] = null !== $this->upgradeBaseInfoDO ? $this->upgradeBaseInfoDO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MobileTestFlightConfigDO'])) {
            $model->mobileTestFlightConfigDO = mobileTestFlightConfigDO::fromMap($map['MobileTestFlightConfigDO']);
        }
        if (isset($map['UpgradeBaseInfoDO'])) {
            $model->upgradeBaseInfoDO = upgradeBaseInfoDO::fromMap($map['UpgradeBaseInfoDO']);
        }

        return $model;
    }
}
