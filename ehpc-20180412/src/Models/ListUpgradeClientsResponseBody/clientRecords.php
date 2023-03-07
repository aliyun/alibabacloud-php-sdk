<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListUpgradeClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clientRecords extends Model
{
    /**
     * @description The version of the E-HPC client after the upgrade.
     *
     * @example 1.2.21
     *
     * @var string
     */
    public $newVersion;

    /**
     * @description The version of the E-HPC client before the upgrade.
     *
     * @example 1.2.16
     *
     * @var string
     */
    public $oldVersion;

    /**
     * @description The ID of the user that upgraded the E-HPC client.
     *
     * @example 129******84
     *
     * @var string
     */
    public $subUid;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2022-08-26T06:26:57.000Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'newVersion' => 'NewVersion',
        'oldVersion' => 'OldVersion',
        'subUid'     => 'SubUid',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newVersion) {
            $res['NewVersion'] = $this->newVersion;
        }
        if (null !== $this->oldVersion) {
            $res['OldVersion'] = $this->oldVersion;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewVersion'])) {
            $model->newVersion = $map['NewVersion'];
        }
        if (isset($map['OldVersion'])) {
            $model->oldVersion = $map['OldVersion'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
