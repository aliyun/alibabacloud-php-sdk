<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAppsByGroupIdResponseBody;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @description AppId
     *
     * @example 1021
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
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

        return $model;
    }
}
