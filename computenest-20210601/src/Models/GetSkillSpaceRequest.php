<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class GetSkillSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $skillSpaceId;
    protected $_name = [
        'skillSpaceId' => 'SkillSpaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillSpaceId) {
            $res['SkillSpaceId'] = $this->skillSpaceId;
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
        if (isset($map['SkillSpaceId'])) {
            $model->skillSpaceId = $map['SkillSpaceId'];
        }

        return $model;
    }
}
