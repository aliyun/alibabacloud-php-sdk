<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpgradeApplicationVersionRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $upgradePolicy;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'upgradePolicy' => 'UpgradePolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->upgradePolicy) {
            $res['UpgradePolicy'] = $this->upgradePolicy;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['UpgradePolicy'])) {
            $model->upgradePolicy = $map['UpgradePolicy'];
        }

        return $model;
    }
}
