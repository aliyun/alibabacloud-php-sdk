<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\privateLink\zones;

class privateLink extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $endpointDomain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointSecurityGroupId;

    /**
     * @var string
     */
    public $endpointStatus;

    /**
     * @var string
     */
    public $lastErrorCode;

    /**
     * @var string
     */
    public $lastErrorMessage;

    /**
     * @var string
     */
    public $observedAt;

    /**
     * @var bool
     */
    public $resourceMayBeCharged;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'connectionStatus' => 'connectionStatus',
        'endpointDomain' => 'endpointDomain',
        'endpointId' => 'endpointId',
        'endpointSecurityGroupId' => 'endpointSecurityGroupId',
        'endpointStatus' => 'endpointStatus',
        'lastErrorCode' => 'lastErrorCode',
        'lastErrorMessage' => 'lastErrorMessage',
        'observedAt' => 'observedAt',
        'resourceMayBeCharged' => 'resourceMayBeCharged',
        'stage' => 'stage',
        'zones' => 'zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['connectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->endpointDomain) {
            $res['endpointDomain'] = $this->endpointDomain;
        }

        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointSecurityGroupId) {
            $res['endpointSecurityGroupId'] = $this->endpointSecurityGroupId;
        }

        if (null !== $this->endpointStatus) {
            $res['endpointStatus'] = $this->endpointStatus;
        }

        if (null !== $this->lastErrorCode) {
            $res['lastErrorCode'] = $this->lastErrorCode;
        }

        if (null !== $this->lastErrorMessage) {
            $res['lastErrorMessage'] = $this->lastErrorMessage;
        }

        if (null !== $this->observedAt) {
            $res['observedAt'] = $this->observedAt;
        }

        if (null !== $this->resourceMayBeCharged) {
            $res['resourceMayBeCharged'] = $this->resourceMayBeCharged;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['connectionStatus'])) {
            $model->connectionStatus = $map['connectionStatus'];
        }

        if (isset($map['endpointDomain'])) {
            $model->endpointDomain = $map['endpointDomain'];
        }

        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }

        if (isset($map['endpointSecurityGroupId'])) {
            $model->endpointSecurityGroupId = $map['endpointSecurityGroupId'];
        }

        if (isset($map['endpointStatus'])) {
            $model->endpointStatus = $map['endpointStatus'];
        }

        if (isset($map['lastErrorCode'])) {
            $model->lastErrorCode = $map['lastErrorCode'];
        }

        if (isset($map['lastErrorMessage'])) {
            $model->lastErrorMessage = $map['lastErrorMessage'];
        }

        if (isset($map['observedAt'])) {
            $model->observedAt = $map['observedAt'];
        }

        if (isset($map['resourceMayBeCharged'])) {
            $model->resourceMayBeCharged = $map['resourceMayBeCharged'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['zones'])) {
            if (!empty($map['zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
