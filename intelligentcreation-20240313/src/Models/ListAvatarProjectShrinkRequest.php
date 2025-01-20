<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class ListAvatarProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $projectIdListShrink;
    protected $_name = [
        'projectIdListShrink' => 'projectIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectIdListShrink) {
            $res['projectIdList'] = $this->projectIdListShrink;
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
        if (isset($map['projectIdList'])) {
            $model->projectIdListShrink = $map['projectIdList'];
        }

        return $model;
    }
}
