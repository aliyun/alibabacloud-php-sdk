<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest;

use AlibabaCloud\Tea\Model;

class basicInfo extends Model
{
    /**
     * @var int
     */
    public $envId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tagIds;
    protected $_name = [
        'envId'   => 'envId',
        'groupId' => 'groupId',
        'name'    => 'name',
        'tagIds'  => 'tagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tagIds) {
            $res['tagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tagIds'])) {
            $model->tagIds = $map['tagIds'];
        }

        return $model;
    }
}
