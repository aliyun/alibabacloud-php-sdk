<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class OpenTrialPackageRequest extends Model
{
    /**
     * @var int
     */
    public $autoCloseSwitch;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoCloseSwitch' => 'AutoCloseSwitch',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCloseSwitch) {
            $res['AutoCloseSwitch'] = $this->autoCloseSwitch;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AutoCloseSwitch'])) {
            $model->autoCloseSwitch = $map['AutoCloseSwitch'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
