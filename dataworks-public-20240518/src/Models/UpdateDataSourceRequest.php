<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $connectionProperties;
    /**
     * @var string
     */
    public $connectionPropertiesMode;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'connectionProperties'     => 'ConnectionProperties',
        'connectionPropertiesMode' => 'ConnectionPropertiesMode',
        'description'              => 'Description',
        'id'                       => 'Id',
        'projectId'                => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }

        if (null !== $this->connectionPropertiesMode) {
            $res['ConnectionPropertiesMode'] = $this->connectionPropertiesMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }

        if (isset($map['ConnectionPropertiesMode'])) {
            $model->connectionPropertiesMode = $map['ConnectionPropertiesMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
