<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetMetaTableThemeLevelRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceType;
    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'tableGuid'      => 'TableGuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
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
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
