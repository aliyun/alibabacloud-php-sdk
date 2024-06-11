<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CreateFeatureEntityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example user_id
     *
     * @var string
     */
    public $joinId;

    /**
     * @description This parameter is required.
     *
     * @example feature_entity_1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'joinId'    => 'JoinId',
        'name'      => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFeatureEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
