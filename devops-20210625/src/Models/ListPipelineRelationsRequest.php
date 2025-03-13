<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineRelationsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example VARIABLE_GROUP
     *
     * @var string
     */
    public $relObjectType;
    protected $_name = [
        'relObjectType' => 'relObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relObjectType) {
            $res['relObjectType'] = $this->relObjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['relObjectType'])) {
            $model->relObjectType = $map['relObjectType'];
        }

        return $model;
    }
}
