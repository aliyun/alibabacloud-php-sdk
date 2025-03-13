<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectIdListShrink) {
            $res['projectIdList'] = $this->projectIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvatarProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectIdList'])) {
            $model->projectIdListShrink = $map['projectIdList'];
        }

        return $model;
    }
}
