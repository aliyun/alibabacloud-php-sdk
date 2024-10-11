<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @example 1212131
     *
     * @var string
     */
    public $id;

    /**
     * @example xx
     *
     * @var string
     */
    public $name;

    /**
     * @example PERSONAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
