<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponseBody\apis;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @description API Id
     *
     * @example 551877242a4b4f3a84a56b7c3570e4a7
     *
     * @var string
     */
    public $apiId;

    /**
     * @example 78d54ac4424d4b1792e33ca35637e8e4
     *
     * @var string
     */
    public $groupId;

    /**
     * @example d1e1ee28f9fb4b729db0ee8ca76ff0a5
     *
     * @var string
     */
    public $stageId;
    protected $_name = [
        'apiId'   => 'ApiId',
        'groupId' => 'GroupId',
        'stageId' => 'StageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return api
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }

        return $model;
    }
}
