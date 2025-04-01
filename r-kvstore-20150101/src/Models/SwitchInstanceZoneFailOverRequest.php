<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class SwitchInstanceZoneFailOverRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $siteFaultTime;

    /**
     * @var string
     */
    public $targetZoneId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'siteFaultTime' => 'SiteFaultTime',
        'targetZoneId' => 'TargetZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->siteFaultTime) {
            $res['SiteFaultTime'] = $this->siteFaultTime;
        }

        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SiteFaultTime'])) {
            $model->siteFaultTime = $map['SiteFaultTime'];
        }

        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }

        return $model;
    }
}
