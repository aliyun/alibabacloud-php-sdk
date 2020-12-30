<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class ListRuleTasksRequest extends Model
{
    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRuleTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
