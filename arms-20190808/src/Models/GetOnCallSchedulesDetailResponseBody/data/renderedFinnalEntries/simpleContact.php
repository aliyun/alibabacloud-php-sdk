<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedFinnalEntries;

use AlibabaCloud\Tea\Model;

class simpleContact extends Model
{
    /**
     * @description The ID of the user on duty.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the user on duty.
     *
     * @example Employee 1
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
     * @return simpleContact
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
