<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class DeletePipelineRelationsRequest extends Model
{
    /**
     * @example 11
     *
     * @var string
     */
    public $relObjectId;

    /**
     * @example VARIABLE_GROUP
     *
     * @var string
     */
    public $relObjectType;
    protected $_name = [
        'relObjectId'   => 'relObjectId',
        'relObjectType' => 'relObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relObjectId) {
            $res['relObjectId'] = $this->relObjectId;
        }
        if (null !== $this->relObjectType) {
            $res['relObjectType'] = $this->relObjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePipelineRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['relObjectId'])) {
            $model->relObjectId = $map['relObjectId'];
        }
        if (isset($map['relObjectType'])) {
            $model->relObjectType = $map['relObjectType'];
        }

        return $model;
    }
}
