<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\phoneNumbers\phoneNumber;

use AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody\phoneNumbers\phoneNumber\skillGroups\skillGroup;
use AlibabaCloud\Tea\Model;

class skillGroups extends Model
{
    /**
     * @var skillGroup[]
     */
    public $skillGroup;
    protected $_name = [
        'skillGroup' => 'SkillGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = [];
            if (null !== $this->skillGroup && \is_array($this->skillGroup)) {
                $n = 0;
                foreach ($this->skillGroup as $item) {
                    $res['SkillGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroup'])) {
            if (!empty($map['SkillGroup'])) {
                $model->skillGroup = [];
                $n                 = 0;
                foreach ($map['SkillGroup'] as $item) {
                    $model->skillGroup[$n++] = null !== $item ? skillGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
