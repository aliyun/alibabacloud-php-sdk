<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesResponseBody\results\streams;

class results extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var streams[]
     */
    public $streams;
    protected $_name = [
        'id' => 'Id',
        'streams' => 'Streams',
    ];

    public function validate()
    {
        if (\is_array($this->streams)) {
            Model::validateArray($this->streams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->streams) {
            if (\is_array($this->streams)) {
                $res['Streams'] = [];
                $n1 = 0;
                foreach ($this->streams as $item1) {
                    $res['Streams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Streams'])) {
            if (!empty($map['Streams'])) {
                $model->streams = [];
                $n1 = 0;
                foreach ($map['Streams'] as $item1) {
                    $model->streams[$n1++] = streams::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
