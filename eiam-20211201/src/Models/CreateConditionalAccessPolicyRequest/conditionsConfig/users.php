<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest\conditionsConfig;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string[]
     */
    public $excludeGroups;

    /**
     * @var string[]
     */
    public $excludeOrganizationalUnits;

    /**
     * @var string[]
     */
    public $excludeUsers;

    /**
     * @var string[]
     */
    public $includeGroups;

    /**
     * @var string[]
     */
    public $includeOrganizationalUnits;

    /**
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

    public function validate()
    {
        if (\is_array($this->excludeGroups)) {
            Model::validateArray($this->excludeGroups);
        }
        if (\is_array($this->excludeOrganizationalUnits)) {
            Model::validateArray($this->excludeOrganizationalUnits);
        }
        if (\is_array($this->excludeUsers)) {
            Model::validateArray($this->excludeUsers);
        }
        if (\is_array($this->includeGroups)) {
            Model::validateArray($this->includeGroups);
        }
        if (\is_array($this->includeOrganizationalUnits)) {
            Model::validateArray($this->includeOrganizationalUnits);
        }
        if (\is_array($this->includeUsers)) {
            Model::validateArray($this->includeUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeGroups) {
            if (\is_array($this->excludeGroups)) {
                $res['ExcludeGroups'] = [];
                $n1 = 0;
                foreach ($this->excludeGroups as $item1) {
                    $res['ExcludeGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeOrganizationalUnits) {
            if (\is_array($this->excludeOrganizationalUnits)) {
                $res['ExcludeOrganizationalUnits'] = [];
                $n1 = 0;
                foreach ($this->excludeOrganizationalUnits as $item1) {
                    $res['ExcludeOrganizationalUnits'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeUsers) {
            if (\is_array($this->excludeUsers)) {
                $res['ExcludeUsers'] = [];
                $n1 = 0;
                foreach ($this->excludeUsers as $item1) {
                    $res['ExcludeUsers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeGroups) {
            if (\is_array($this->includeGroups)) {
                $res['IncludeGroups'] = [];
                $n1 = 0;
                foreach ($this->includeGroups as $item1) {
                    $res['IncludeGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeOrganizationalUnits) {
            if (\is_array($this->includeOrganizationalUnits)) {
                $res['IncludeOrganizationalUnits'] = [];
                $n1 = 0;
                foreach ($this->includeOrganizationalUnits as $item1) {
                    $res['IncludeOrganizationalUnits'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeUsers) {
            if (\is_array($this->includeUsers)) {
                $res['IncludeUsers'] = [];
                $n1 = 0;
                foreach ($this->includeUsers as $item1) {
                    $res['IncludeUsers'][$n1] = $item1;
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
        if (isset($map['ExcludeGroups'])) {
            if (!empty($map['ExcludeGroups'])) {
                $model->excludeGroups = [];
                $n1 = 0;
                foreach ($map['ExcludeGroups'] as $item1) {
                    $model->excludeGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeOrganizationalUnits'])) {
            if (!empty($map['ExcludeOrganizationalUnits'])) {
                $model->excludeOrganizationalUnits = [];
                $n1 = 0;
                foreach ($map['ExcludeOrganizationalUnits'] as $item1) {
                    $model->excludeOrganizationalUnits[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeUsers'])) {
            if (!empty($map['ExcludeUsers'])) {
                $model->excludeUsers = [];
                $n1 = 0;
                foreach ($map['ExcludeUsers'] as $item1) {
                    $model->excludeUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeGroups'])) {
            if (!empty($map['IncludeGroups'])) {
                $model->includeGroups = [];
                $n1 = 0;
                foreach ($map['IncludeGroups'] as $item1) {
                    $model->includeGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeOrganizationalUnits'])) {
            if (!empty($map['IncludeOrganizationalUnits'])) {
                $model->includeOrganizationalUnits = [];
                $n1 = 0;
                foreach ($map['IncludeOrganizationalUnits'] as $item1) {
                    $model->includeOrganizationalUnits[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeUsers'])) {
            if (!empty($map['IncludeUsers'])) {
                $model->includeUsers = [];
                $n1 = 0;
                foreach ($map['IncludeUsers'] as $item1) {
                    $model->includeUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
