<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\acknowledge;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\contacts;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\escalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\scheduleGroup;

class IncidentMemberStruct extends Model
{
    /**
     * @var acknowledge
     */
    public $acknowledge;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var escalation
     */
    public $escalation;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $incidentMemberId;

    /**
     * @var scheduleGroup
     */
    public $scheduleGroup;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'acknowledge' => 'acknowledge',
        'contactId' => 'contactId',
        'contacts' => 'contacts',
        'escalation' => 'escalation',
        'incidentId' => 'incidentId',
        'incidentMemberId' => 'incidentMemberId',
        'scheduleGroup' => 'scheduleGroup',
        'time' => 'time',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->acknowledge) {
            $this->acknowledge->validate();
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (null !== $this->escalation) {
            $this->escalation->validate();
        }
        if (null !== $this->scheduleGroup) {
            $this->scheduleGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acknowledge) {
            $res['acknowledge'] = null !== $this->acknowledge ? $this->acknowledge->toArray($noStream) : $this->acknowledge;
        }

        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['contacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->escalation) {
            $res['escalation'] = null !== $this->escalation ? $this->escalation->toArray($noStream) : $this->escalation;
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->incidentMemberId) {
            $res['incidentMemberId'] = $this->incidentMemberId;
        }

        if (null !== $this->scheduleGroup) {
            $res['scheduleGroup'] = null !== $this->scheduleGroup ? $this->scheduleGroup->toArray($noStream) : $this->scheduleGroup;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['acknowledge'])) {
            $model->acknowledge = acknowledge::fromMap($map['acknowledge']);
        }

        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }

        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['contacts'] as $item1) {
                    $model->contacts[$n1] = contacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['escalation'])) {
            $model->escalation = escalation::fromMap($map['escalation']);
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['incidentMemberId'])) {
            $model->incidentMemberId = $map['incidentMemberId'];
        }

        if (isset($map['scheduleGroup'])) {
            $model->scheduleGroup = scheduleGroup::fromMap($map['scheduleGroup']);
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
