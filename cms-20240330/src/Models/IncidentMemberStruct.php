<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\acknowledge;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\contacts;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\escalation;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct\scheduleGroup;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acknowledge) {
            $res['acknowledge'] = null !== $this->acknowledge ? $this->acknowledge->toMap() : null;
        }
        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }
        if (null !== $this->contacts) {
            $res['contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalation) {
            $res['escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentMemberId) {
            $res['incidentMemberId'] = $this->incidentMemberId;
        }
        if (null !== $this->scheduleGroup) {
            $res['scheduleGroup'] = null !== $this->scheduleGroup ? $this->scheduleGroup->toMap() : null;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentMemberStruct
     */
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
                $n = 0;
                foreach ($map['contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
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
