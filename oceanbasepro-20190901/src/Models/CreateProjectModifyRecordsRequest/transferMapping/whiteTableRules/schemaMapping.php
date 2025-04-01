<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\whiteTableRules;

use AlibabaCloud\Dara\Model;

class schemaMapping extends Model
{
    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'mappedName' => 'MappedName',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
