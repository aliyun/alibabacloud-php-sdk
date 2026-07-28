<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class DlfDatabase extends Model
{
    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $tableCount;
    protected $_name = [
        'databaseName' => 'databaseName',
        'description' => 'description',
        'tableCount' => 'tableCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->tableCount) {
            $res['tableCount'] = $this->tableCount;
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
        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['tableCount'])) {
            $model->tableCount = $map['tableCount'];
        }

        return $model;
    }
}
