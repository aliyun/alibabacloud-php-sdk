<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule;

use AlibabaCloud\SDK\Cms\V20190101\Models\EscalationRule\escalations\contactGroupsByLevel;
use AlibabaCloud\Tea\Model;

class escalations extends Model
{
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
        'contactGroups'        => 'ContactGroups',
        'contactGroupsByLevel' => 'ContactGroupsByLevel',
        'escalateMin'          => 'EscalateMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->contactGroupsByLevel) {
            $res['ContactGroupsByLevel'] = null !== $this->contactGroupsByLevel ? $this->contactGroupsByLevel->toMap() : null;
        }
        if (null !== $this->escalateMin) {
            $res['EscalateMin'] = $this->escalateMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = $map['ContactGroups'];
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
