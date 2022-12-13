<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 234532
     *
     * @var int
     */
    public $escalationPlanId;
    protected $_name = [
        'escalationPlanId' => 'escalationPlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
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
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }

        return $model;
    }
}
