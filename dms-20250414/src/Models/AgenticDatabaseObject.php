<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticDatabaseObject extends Model
{
    /**
     * @var string
     */
    public $databaseQualifiedName;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $ddlSql;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectQualifiedName;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'databaseQualifiedName' => 'DatabaseQualifiedName',
        'databaseUuid' => 'DatabaseUuid',
        'ddlSql' => 'DdlSql',
        'objectName' => 'ObjectName',
        'objectQualifiedName' => 'ObjectQualifiedName',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseQualifiedName) {
            $res['DatabaseQualifiedName'] = $this->databaseQualifiedName;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->ddlSql) {
            $res['DdlSql'] = $this->ddlSql;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectQualifiedName) {
            $res['ObjectQualifiedName'] = $this->objectQualifiedName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
        if (isset($map['DatabaseQualifiedName'])) {
            $model->databaseQualifiedName = $map['DatabaseQualifiedName'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['DdlSql'])) {
            $model->ddlSql = $map['DdlSql'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectQualifiedName'])) {
            $model->objectQualifiedName = $map['ObjectQualifiedName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
