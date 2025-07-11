<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesResponseBody\results\streams;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 32388487****92996-cn-qingdao
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->streams) {
            $res['Streams'] = [];
            if (null !== $this->streams && \is_array($this->streams)) {
                $n = 0;
                foreach ($this->streams as $item) {
                    $res['Streams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Streams'])) {
            if (!empty($map['Streams'])) {
                $model->streams = [];
                $n = 0;
                foreach ($map['Streams'] as $item) {
                    $model->streams[$n++] = null !== $item ? streams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
