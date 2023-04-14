<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListRuleTasksRequest extends Model
{
    /**
     * @description The ID of the scene.
     *
     * @example testid
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'sceneId' => 'sceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
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
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        return $model;
    }
}
