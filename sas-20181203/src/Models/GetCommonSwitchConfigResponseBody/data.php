<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCommonSwitchConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Specifies whether to turn on the switch for newly added servers. Valid values:
     *
     *   **add**: By default, the switch is turned on for newly added servers.
     *   **del**: By default, the switch is turned off for newly added servers.
     *
     * @example add
     *
     * @var string
     */
    public $targetDefault;

    /**
     * @description The status of the synchronization. Valid values:
     *
     *   **sync**: The modifications are being synchronized.
     *   **valid**: The modifications has taken effect.
     *
     * @example valid
     *
     * @var string
     */
    public $targetSyncStatus;
    protected $_name = [
        'targetDefault'    => 'TargetDefault',
        'targetSyncStatus' => 'TargetSyncStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetDefault) {
            $res['TargetDefault'] = $this->targetDefault;
        }
        if (null !== $this->targetSyncStatus) {
            $res['TargetSyncStatus'] = $this->targetSyncStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetDefault'])) {
            $model->targetDefault = $map['TargetDefault'];
        }
        if (isset($map['TargetSyncStatus'])) {
            $model->targetSyncStatus = $map['TargetSyncStatus'];
        }

        return $model;
    }
}
