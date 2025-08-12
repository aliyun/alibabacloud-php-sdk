<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule\escalations\contactGroupsByLevel;

class escalations extends Model
{
    /**
     * @var string[]
     */
    public $backupContactGroups;

    /**
     * @var string[]
     */
    public $contactGroups;

    /**
     * @var contactGroupsByLevel
     */
    public $contactGroupsByLevel;

    /**
     * @var int
     */
    public $escalateMin;
    protected $_name = [
        'backupContactGroups' => 'BackupContactGroups',
        'contactGroups' => 'ContactGroups',
        'contactGroupsByLevel' => 'ContactGroupsByLevel',
        'escalateMin' => 'EscalateMin',
    ];

    public function validate()
    {
        if (\is_array($this->backupContactGroups)) {
            Model::validateArray($this->backupContactGroups);
        }
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (null !== $this->contactGroupsByLevel) {
            $this->contactGroupsByLevel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupContactGroups) {
            if (\is_array($this->backupContactGroups)) {
                $res['BackupContactGroups'] = [];
                $n1 = 0;
                foreach ($this->backupContactGroups as $item1) {
                    $res['BackupContactGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['ContactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['ContactGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactGroupsByLevel) {
            $res['ContactGroupsByLevel'] = null !== $this->contactGroupsByLevel ? $this->contactGroupsByLevel->toArray($noStream) : $this->contactGroupsByLevel;
        }

        if (null !== $this->escalateMin) {
            $res['EscalateMin'] = $this->escalateMin;
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
        if (isset($map['BackupContactGroups'])) {
            if (!empty($map['BackupContactGroups'])) {
                $model->backupContactGroups = [];
                $n1 = 0;
                foreach ($map['BackupContactGroups'] as $item1) {
                    $model->backupContactGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['ContactGroups'] as $item1) {
                    $model->contactGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactGroupsByLevel'])) {
            $model->contactGroupsByLevel = contactGroupsByLevel::fromMap($map['ContactGroupsByLevel']);
        }

        if (isset($map['EscalateMin'])) {
            $model->escalateMin = $map['EscalateMin'];
        }

        return $model;
    }
}
