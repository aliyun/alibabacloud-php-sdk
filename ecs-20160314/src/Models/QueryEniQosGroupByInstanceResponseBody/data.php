<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\QueryEniQosGroupByInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $eniQosGroups;
    protected $_name = [
        'eniQosGroups' => 'EniQosGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniQosGroups) {
            $res['EniQosGroups'] = $this->eniQosGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniQosGroups'])) {
            if (!empty($map['EniQosGroups'])) {
                $model->eniQosGroups = $map['EniQosGroups'];
            }
        }

        return $model;
    }
}
