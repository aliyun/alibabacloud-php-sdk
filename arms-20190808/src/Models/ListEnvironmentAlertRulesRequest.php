<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListEnvironmentAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'addonName' => 'AddonName',
        'environmentId' => 'EnvironmentId',
        'regionId' => 'RegionId',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
