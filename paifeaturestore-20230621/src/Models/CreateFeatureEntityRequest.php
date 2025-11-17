<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class CreateFeatureEntityRequest extends Model
{
    /**
     * @var string
     */
    public $joinId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentFeatureEntityId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'joinId' => 'JoinId',
        'name' => 'Name',
        'parentFeatureEntityId' => 'ParentFeatureEntityId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentFeatureEntityId) {
            $res['ParentFeatureEntityId'] = $this->parentFeatureEntityId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentFeatureEntityId'])) {
            $model->parentFeatureEntityId = $map['ParentFeatureEntityId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
