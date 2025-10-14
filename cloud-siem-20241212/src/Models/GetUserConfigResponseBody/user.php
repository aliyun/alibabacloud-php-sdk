<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetUserConfigResponseBody;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $ctdrVersion;

    /**
     * @var string
     */
    public $dataStorageVersion;

    /**
     * @var string
     */
    public $upgradeCtdrVersion;

    /**
     * @var string
     */
    public $upgradeStatus;
    protected $_name = [
        'ctdrVersion' => 'CtdrVersion',
        'dataStorageVersion' => 'DataStorageVersion',
        'upgradeCtdrVersion' => 'UpgradeCtdrVersion',
        'upgradeStatus' => 'UpgradeStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ctdrVersion) {
            $res['CtdrVersion'] = $this->ctdrVersion;
        }

        if (null !== $this->dataStorageVersion) {
            $res['DataStorageVersion'] = $this->dataStorageVersion;
        }

        if (null !== $this->upgradeCtdrVersion) {
            $res['UpgradeCtdrVersion'] = $this->upgradeCtdrVersion;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
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
        if (isset($map['CtdrVersion'])) {
            $model->ctdrVersion = $map['CtdrVersion'];
        }

        if (isset($map['DataStorageVersion'])) {
            $model->dataStorageVersion = $map['DataStorageVersion'];
        }

        if (isset($map['UpgradeCtdrVersion'])) {
            $model->upgradeCtdrVersion = $map['UpgradeCtdrVersion'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        return $model;
    }
}
