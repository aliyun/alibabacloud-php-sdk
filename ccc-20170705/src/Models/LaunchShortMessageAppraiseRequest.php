<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class LaunchShortMessageAppraiseRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $contactType;

    /**
     * @var string
     */
    public $phoneNumbers;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'acid'         => 'Acid',
        'skillGroupId' => 'SkillGroupId',
        'contactType'  => 'ContactType',
        'phoneNumbers' => 'PhoneNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LaunchShortMessageAppraiseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }

        return $model;
    }
}
