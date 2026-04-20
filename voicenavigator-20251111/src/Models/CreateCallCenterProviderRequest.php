<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateCallCenterProviderRequest extends Model
{
    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $extras;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $originator;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $referTo;

    /**
     * @var string
     */
    public $trunkId;
    protected $_name = [
        'destination' => 'Destination',
        'displayName' => 'DisplayName',
        'extras' => 'Extras',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'originator' => 'Originator',
        'providerType' => 'ProviderType',
        'referTo' => 'ReferTo',
        'trunkId' => 'TrunkId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->extras) {
            $res['Extras'] = $this->extras;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->originator) {
            $res['Originator'] = $this->originator;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->referTo) {
            $res['ReferTo'] = $this->referTo;
        }

        if (null !== $this->trunkId) {
            $res['TrunkId'] = $this->trunkId;
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Extras'])) {
            $model->extras = $map['Extras'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Originator'])) {
            $model->originator = $map['Originator'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['ReferTo'])) {
            $model->referTo = $map['ReferTo'];
        }

        if (isset($map['TrunkId'])) {
            $model->trunkId = $map['TrunkId'];
        }

        return $model;
    }
}
