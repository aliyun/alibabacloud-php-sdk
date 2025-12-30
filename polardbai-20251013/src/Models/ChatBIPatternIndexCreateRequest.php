<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIPatternIndexCreateRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $patternTableName;

    /**
     * @var string
     */
    public $tableNameSuffix;
    protected $_name = [
        'dbName' => 'DbName',
        'instanceName' => 'InstanceName',
        'patternTableName' => 'PatternTableName',
        'tableNameSuffix' => 'TableNameSuffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->patternTableName) {
            $res['PatternTableName'] = $this->patternTableName;
        }

        if (null !== $this->tableNameSuffix) {
            $res['TableNameSuffix'] = $this->tableNameSuffix;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PatternTableName'])) {
            $model->patternTableName = $map['PatternTableName'];
        }

        if (isset($map['TableNameSuffix'])) {
            $model->tableNameSuffix = $map['TableNameSuffix'];
        }

        return $model;
    }
}
