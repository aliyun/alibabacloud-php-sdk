<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyModelRequest extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $newModelName;
    protected $_name = [
        'modelName'    => 'ModelName',
        'description'  => 'Description',
        'schema'       => 'Schema',
        'groupId'      => 'GroupId',
        'newModelName' => 'NewModelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->newModelName) {
            $res['NewModelName'] = $this->newModelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NewModelName'])) {
            $model->newModelName = $map['NewModelName'];
        }

        return $model;
    }
}
