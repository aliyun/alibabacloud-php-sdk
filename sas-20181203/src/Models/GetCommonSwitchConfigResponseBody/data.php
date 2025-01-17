<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCommonSwitchConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $targetDefault;
    /**
     * @var string
     */
    public $targetSyncStatus;
    protected $_name = [
        'targetDefault'    => 'TargetDefault',
        'targetSyncStatus' => 'TargetSyncStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
