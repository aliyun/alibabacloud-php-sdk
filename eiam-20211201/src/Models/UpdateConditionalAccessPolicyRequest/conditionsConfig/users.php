<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateConditionalAccessPolicyRequest\conditionsConfig;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description Excluded user groups
     *
     * @var string[]
     */
    public $excludeGroups;

    /**
     * @description Excluded organizations
     *
     * @var string[]
     */
    public $excludeOrganizationalUnits;

    /**
     * @description Excluded Users
     *
     * @var string[]
     */
    public $excludeUsers;

    /**
     * @description Included User Groups
     *
     * @var string[]
     */
    public $includeGroups;

    /**
     * @description Included organizations
     *
     * @var string[]
     */
    public $includeOrganizationalUnits;

    /**
     * @description Included Users
     *
     * @var string[]
     */
    public $includeUsers;
    protected $_name = [
        'excludeGroups' => 'ExcludeGroups',
        'excludeOrganizationalUnits' => 'ExcludeOrganizationalUnits',
        'excludeUsers' => 'ExcludeUsers',
        'includeGroups' => 'IncludeGroups',
        'includeOrganizationalUnits' => 'IncludeOrganizationalUnits',
        'includeUsers' => 'IncludeUsers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeGroups) {
            $res['ExcludeGroups'] = $this->excludeGroups;
        }
        if (null !== $this->excludeOrganizationalUnits) {
            $res['ExcludeOrganizationalUnits'] = $this->excludeOrganizationalUnits;
        }
        if (null !== $this->excludeUsers) {
            $res['ExcludeUsers'] = $this->excludeUsers;
        }
        if (null !== $this->includeGroups) {
            $res['IncludeGroups'] = $this->includeGroups;
        }
        if (null !== $this->includeOrganizationalUnits) {
            $res['IncludeOrganizationalUnits'] = $this->includeOrganizationalUnits;
        }
        if (null !== $this->includeUsers) {
            $res['IncludeUsers'] = $this->includeUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeGroups'])) {
            if (!empty($map['ExcludeGroups'])) {
                $model->excludeGroups = $map['ExcludeGroups'];
            }
        }
        if (isset($map['ExcludeOrganizationalUnits'])) {
            if (!empty($map['ExcludeOrganizationalUnits'])) {
                $model->excludeOrganizationalUnits = $map['ExcludeOrganizationalUnits'];
            }
        }
        if (isset($map['ExcludeUsers'])) {
            if (!empty($map['ExcludeUsers'])) {
                $model->excludeUsers = $map['ExcludeUsers'];
            }
        }
        if (isset($map['IncludeGroups'])) {
            if (!empty($map['IncludeGroups'])) {
                $model->includeGroups = $map['IncludeGroups'];
            }
        }
        if (isset($map['IncludeOrganizationalUnits'])) {
            if (!empty($map['IncludeOrganizationalUnits'])) {
                $model->includeOrganizationalUnits = $map['IncludeOrganizationalUnits'];
            }
        }
        if (isset($map['IncludeUsers'])) {
            if (!empty($map['IncludeUsers'])) {
                $model->includeUsers = $map['IncludeUsers'];
            }
        }

        return $model;
    }
}
