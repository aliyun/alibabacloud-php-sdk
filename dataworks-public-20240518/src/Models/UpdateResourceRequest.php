<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $resourceFile;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'id' => 'Id',
        'projectId' => 'ProjectId',
        'resourceFile' => 'ResourceFile',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceFile) {
            $res['ResourceFile'] = $this->resourceFile;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ResourceFile'])) {
            $model->resourceFile = $map['ResourceFile'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
