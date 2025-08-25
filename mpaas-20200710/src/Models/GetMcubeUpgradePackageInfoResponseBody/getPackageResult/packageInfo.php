<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo\mobileTestFlightConfigDO;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo\upgradeBaseInfoDO;

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
        'upgradeBaseInfoDO' => 'UpgradeBaseInfoDO',
    ];

    public function validate()
    {
        if (null !== $this->mobileTestFlightConfigDO) {
            $this->mobileTestFlightConfigDO->validate();
        }
        if (null !== $this->upgradeBaseInfoDO) {
            $this->upgradeBaseInfoDO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobileTestFlightConfigDO) {
            $res['MobileTestFlightConfigDO'] = null !== $this->mobileTestFlightConfigDO ? $this->mobileTestFlightConfigDO->toArray($noStream) : $this->mobileTestFlightConfigDO;
        }

        if (null !== $this->upgradeBaseInfoDO) {
            $res['UpgradeBaseInfoDO'] = null !== $this->upgradeBaseInfoDO ? $this->upgradeBaseInfoDO->toArray($noStream) : $this->upgradeBaseInfoDO;
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
        if (isset($map['MobileTestFlightConfigDO'])) {
            $model->mobileTestFlightConfigDO = mobileTestFlightConfigDO::fromMap($map['MobileTestFlightConfigDO']);
        }

        if (isset($map['UpgradeBaseInfoDO'])) {
            $model->upgradeBaseInfoDO = upgradeBaseInfoDO::fromMap($map['UpgradeBaseInfoDO']);
        }

        return $model;
    }
}
