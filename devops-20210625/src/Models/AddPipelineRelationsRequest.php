<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class AddPipelineRelationsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11,22
     *
     * @var string
     */
    public $relObjectIds;

    /**
     * @description This parameter is required.
     *
     * @example VARIABLE_GROUP
     *
     * @var string
     */
    public $relObjectType;
    protected $_name = [
        'relObjectIds'  => 'relObjectIds',
        'relObjectType' => 'relObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relObjectIds) {
            $res['relObjectIds'] = $this->relObjectIds;
        }
        if (null !== $this->relObjectType) {
            $res['relObjectType'] = $this->relObjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPipelineRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['relObjectIds'])) {
            $model->relObjectIds = $map['relObjectIds'];
        }
        if (isset($map['relObjectType'])) {
            $model->relObjectType = $map['relObjectType'];
        }

        return $model;
    }
}
