<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CreateBodyPersonRequest extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description 实体ID，可以包含数字、字母和下划线，相同db下不可以重复，长度1-64。
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'dbId' => 'DbId',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBodyPersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
