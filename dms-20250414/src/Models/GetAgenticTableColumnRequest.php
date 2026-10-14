<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class GetAgenticTableColumnRequest extends Model
{
    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $tableQualifiedName;
    protected $_name = [
        'databaseUuid' => 'DatabaseUuid',
        'tableQualifiedName' => 'TableQualifiedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->tableQualifiedName) {
            $res['TableQualifiedName'] = $this->tableQualifiedName;
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
        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['TableQualifiedName'])) {
            $model->tableQualifiedName = $map['TableQualifiedName'];
        }

        return $model;
    }
}
