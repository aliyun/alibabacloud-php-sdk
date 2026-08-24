<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanGlobalConfigResponseBody;

use AlibabaCloud\Dara\Model;

class wuyingVulFixConfig extends Model
{
    /**
     * @var bool
     */
    public $antiShutdownSwitch;

    /**
     * @var bool
     */
    public $snapshotSwitch;
    protected $_name = [
        'antiShutdownSwitch' => 'AntiShutdownSwitch',
        'snapshotSwitch' => 'SnapshotSwitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antiShutdownSwitch) {
            $res['AntiShutdownSwitch'] = $this->antiShutdownSwitch;
        }

        if (null !== $this->snapshotSwitch) {
            $res['SnapshotSwitch'] = $this->snapshotSwitch;
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
        if (isset($map['AntiShutdownSwitch'])) {
            $model->antiShutdownSwitch = $map['AntiShutdownSwitch'];
        }

        if (isset($map['SnapshotSwitch'])) {
            $model->snapshotSwitch = $map['SnapshotSwitch'];
        }

        return $model;
    }
}
