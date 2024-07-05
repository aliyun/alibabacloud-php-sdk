<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesResponseBody\results;

use AlibabaCloud\Tea\Model;

class streams extends Model
{
    /**
     * @example Stream not found
     *
     * @var string
     */
    public $error;

    /**
     * @example 3238848****092997-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example 310101*****187542126
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'error' => 'Error',
        'id'    => 'Id',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
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
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
