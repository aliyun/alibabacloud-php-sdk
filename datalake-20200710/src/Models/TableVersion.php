<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class TableVersion extends Model
{
    /**
     * @var Table
     */
    public $table;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'table'     => 'Table',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Table'])) {
            $model->table = Table::fromMap($map['Table']);
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
