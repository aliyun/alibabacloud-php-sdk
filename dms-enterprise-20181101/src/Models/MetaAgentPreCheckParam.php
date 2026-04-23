<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class MetaAgentPreCheckParam extends Model
{
    /**
     * @var string
     */
    public $dbIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $supplement;

    /**
     * @var string
     */
    public $tableNames;
    protected $_name = [
        'dbIds' => 'DbIds',
        'description' => 'Description',
        'instanceIds' => 'InstanceIds',
        'supplement' => 'Supplement',
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbIds) {
            $res['DbIds'] = $this->dbIds;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->supplement) {
            $res['Supplement'] = $this->supplement;
        }

        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
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
        if (isset($map['DbIds'])) {
            $model->dbIds = $map['DbIds'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['Supplement'])) {
            $model->supplement = $map['Supplement'];
        }

        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }

        return $model;
    }
}
