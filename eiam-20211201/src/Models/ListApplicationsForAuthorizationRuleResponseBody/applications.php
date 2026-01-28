<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForAuthorizationRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForAuthorizationRuleResponseBody\applications\validityPeriod;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var validityPeriod
     */
    public $validityPeriod;

    /**
     * @var string
     */
    public $validityType;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId' => 'InstanceId',
        'validityPeriod' => 'ValidityPeriod',
        'validityType' => 'ValidityType',
    ];

    public function validate()
    {
        if (null !== $this->validityPeriod) {
            $this->validityPeriod->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = null !== $this->validityPeriod ? $this->validityPeriod->toArray($noStream) : $this->validityPeriod;
        }

        if (null !== $this->validityType) {
            $res['ValidityType'] = $this->validityType;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = validityPeriod::fromMap($map['ValidityPeriod']);
        }

        if (isset($map['ValidityType'])) {
            $model->validityType = $map['ValidityType'];
        }

        return $model;
    }
}
