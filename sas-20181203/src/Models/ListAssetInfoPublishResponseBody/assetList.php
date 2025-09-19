<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetInfoPublishResponseBody;

use AlibabaCloud\Dara\Model;

class assetList extends Model
{
    /**
     * @var string
     */
    public $curVersion;

    /**
     * @var int
     */
    public $lastUpgradeTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $upgradeEnable;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'curVersion' => 'CurVersion',
        'lastUpgradeTime' => 'LastUpgradeTime',
        'status' => 'Status',
        'upgradeEnable' => 'UpgradeEnable',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curVersion) {
            $res['CurVersion'] = $this->curVersion;
        }

        if (null !== $this->lastUpgradeTime) {
            $res['LastUpgradeTime'] = $this->lastUpgradeTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->upgradeEnable) {
            $res['UpgradeEnable'] = $this->upgradeEnable;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CurVersion'])) {
            $model->curVersion = $map['CurVersion'];
        }

        if (isset($map['LastUpgradeTime'])) {
            $model->lastUpgradeTime = $map['LastUpgradeTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpgradeEnable'])) {
            $model->upgradeEnable = $map['UpgradeEnable'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
