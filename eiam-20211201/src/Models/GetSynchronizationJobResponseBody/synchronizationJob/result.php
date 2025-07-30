<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\groupMemberStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\groupStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\userStatistics;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The error code corresponding to the error message.
     *
     * @example ResourceNotFound. SynchronizationJob
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned in the case of an error.
     *
     * @example The specified SynchronizationJob resource: %s not found.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The group member synchronization result statistics.
     *
     * @var groupMemberStatistics
     */
    public $groupMemberStatistics;

    /**
     * @description The group synchronization result statistics.
     *
     * @var groupStatistics
     */
    public $groupStatistics;

    /**
     * @description The organization synchronization result statistics.
     *
     * @var organizationalUnitStatistics
     */
    public $organizationalUnitStatistics;

    /**
     * @description The user synchronization result statistics.
     *
     * @var userStatistics
     */
    public $userStatistics;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'groupMemberStatistics' => 'GroupMemberStatistics',
        'groupStatistics' => 'GroupStatistics',
        'organizationalUnitStatistics' => 'OrganizationalUnitStatistics',
        'userStatistics' => 'UserStatistics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->groupMemberStatistics) {
            $res['GroupMemberStatistics'] = null !== $this->groupMemberStatistics ? $this->groupMemberStatistics->toMap() : null;
        }
        if (null !== $this->groupStatistics) {
            $res['GroupStatistics'] = null !== $this->groupStatistics ? $this->groupStatistics->toMap() : null;
        }
        if (null !== $this->organizationalUnitStatistics) {
            $res['OrganizationalUnitStatistics'] = null !== $this->organizationalUnitStatistics ? $this->organizationalUnitStatistics->toMap() : null;
        }
        if (null !== $this->userStatistics) {
            $res['UserStatistics'] = null !== $this->userStatistics ? $this->userStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
