<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\groupMemberStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\groupStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\userStatistics;

class result extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var groupMemberStatistics
     */
    public $groupMemberStatistics;
    /**
     * @var groupStatistics
     */
    public $groupStatistics;
    /**
     * @var organizationalUnitStatistics
     */
    public $organizationalUnitStatistics;
    /**
     * @var userStatistics
     */
    public $userStatistics;
    protected $_name = [
        'errorCode'                    => 'ErrorCode',
        'errorMessage'                 => 'ErrorMessage',
        'groupMemberStatistics'        => 'GroupMemberStatistics',
        'groupStatistics'              => 'GroupStatistics',
        'organizationalUnitStatistics' => 'OrganizationalUnitStatistics',
        'userStatistics'               => 'UserStatistics',
    ];

    public function validate()
    {
        if (null !== $this->groupMemberStatistics) {
            $this->groupMemberStatistics->validate();
        }
        if (null !== $this->groupStatistics) {
            $this->groupStatistics->validate();
        }
        if (null !== $this->organizationalUnitStatistics) {
            $this->organizationalUnitStatistics->validate();
        }
        if (null !== $this->userStatistics) {
            $this->userStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->groupMemberStatistics) {
            $res['GroupMemberStatistics'] = null !== $this->groupMemberStatistics ? $this->groupMemberStatistics->toArray($noStream) : $this->groupMemberStatistics;
        }

        if (null !== $this->groupStatistics) {
            $res['GroupStatistics'] = null !== $this->groupStatistics ? $this->groupStatistics->toArray($noStream) : $this->groupStatistics;
        }

        if (null !== $this->organizationalUnitStatistics) {
            $res['OrganizationalUnitStatistics'] = null !== $this->organizationalUnitStatistics ? $this->organizationalUnitStatistics->toArray($noStream) : $this->organizationalUnitStatistics;
        }

        if (null !== $this->userStatistics) {
            $res['UserStatistics'] = null !== $this->userStatistics ? $this->userStatistics->toArray($noStream) : $this->userStatistics;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['GroupMemberStatistics'])) {
            $model->groupMemberStatistics = groupMemberStatistics::fromMap($map['GroupMemberStatistics']);
        }

        if (isset($map['GroupStatistics'])) {
            $model->groupStatistics = groupStatistics::fromMap($map['GroupStatistics']);
        }

        if (isset($map['OrganizationalUnitStatistics'])) {
            $model->organizationalUnitStatistics = organizationalUnitStatistics::fromMap($map['OrganizationalUnitStatistics']);
        }

        if (isset($map['UserStatistics'])) {
            $model->userStatistics = userStatistics::fromMap($map['UserStatistics']);
        }

        return $model;
    }
}
