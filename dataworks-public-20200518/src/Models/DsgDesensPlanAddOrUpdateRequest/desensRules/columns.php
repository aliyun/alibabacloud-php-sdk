<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'column' => 'column',
        'dbType' => 'dbType',
        'project' => 'project',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['column'] = $this->column;
        }

        if (null !== $this->dbType) {
            $res['dbType'] = $this->dbType;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
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
        if (isset($map['column'])) {
            $model->column = $map['column'];
        }

        if (isset($map['dbType'])) {
            $model->dbType = $map['dbType'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
