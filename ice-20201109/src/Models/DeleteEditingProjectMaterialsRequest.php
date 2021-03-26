<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteEditingProjectMaterialsRequest extends Model
{
    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 素材ID
     *
     * @var string
     */
    public $materialIds;

    /**
     * @description 素材类型
     *
     * @var string
     */
    public $materialType;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'materialIds'  => 'MaterialIds',
        'materialType' => 'MaterialType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->materialIds) {
            $res['MaterialIds'] = $this->materialIds;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEditingProjectMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['MaterialIds'])) {
            $model->materialIds = $map['MaterialIds'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }

        return $model;
    }
}
