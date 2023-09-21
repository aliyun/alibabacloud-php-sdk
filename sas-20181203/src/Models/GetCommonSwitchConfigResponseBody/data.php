<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCommonSwitchConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example add
     *
     * @var string
     */
    public $targetDefault;

    /**
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
