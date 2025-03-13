<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class QueryAvatarProjectRequest extends Model
{
    /**
     * @example 11111
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'projectId' => 'projectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAvatarProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        return $model;
    }
}
