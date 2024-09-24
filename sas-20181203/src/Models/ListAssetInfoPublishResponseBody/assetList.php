<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetInfoPublishResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @example 0.0.8
     *
     * @var string
     */
    public $curVersion;

    /**
     * @example 1724522400000
     *
     * @var int
     */
    public $lastUpgradeTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $upgradeEnable;

    /**
     * @example 2a98f149-0256-414c-a29a-a69f8a75****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'curVersion'      => 'CurVersion',
        'lastUpgradeTime' => 'LastUpgradeTime',
        'status'          => 'Status',
        'upgradeEnable'   => 'UpgradeEnable',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return assetList
     */
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
