<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ListAvatarProjectRequest extends Model
{
    /**
     * @var string[]
     */
    public $projectIdList;
    protected $_name = [
        'projectIdList' => 'projectIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectIdList) {
            $res['projectIdList'] = $this->projectIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvatarProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectIdList'])) {
            if (!empty($map['projectIdList'])) {
                $model->projectIdList = $map['projectIdList'];
            }
        }

        return $model;
    }
}
