<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidList extends Model
{
    /**
     * @var string[]
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->name)) {
            Model::validateArray($this->name);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            if (\is_array($this->name)) {
                $res['Name'] = [];
                $n1 = 0;
                foreach ($this->name as $item1) {
                    $res['Name'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Name'])) {
            if (!empty($map['Name'])) {
                $model->name = [];
                $n1 = 0;
                foreach ($map['Name'] as $item1) {
                    $model->name[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
