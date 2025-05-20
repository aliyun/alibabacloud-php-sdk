<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Permission extends Model
{
    /**
     * @var string
     */
    public $access;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $principal;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'access' => 'access',
        'database' => 'database',
        'principal' => 'principal',
        'resourceType' => 'resourceType',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->access) {
            $res['access'] = $this->access;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->principal) {
            $res['principal'] = $this->principal;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['access'])) {
            $model->access = $map['access'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['principal'])) {
            $model->principal = $map['principal'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
