<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponse\data;

use AlibabaCloud\Tea\Model;

class invalidList extends Model
{
    /**
     * @description Name
     *
     * @var string[]
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            if (!empty($map['Name'])) {
                $model->name = $map['Name'];
            }
        }

        return $model;
    }
}
