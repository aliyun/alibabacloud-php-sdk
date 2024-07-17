<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody\result;

use AlibabaCloud\Tea\Model;

class queryNode extends Model
{
    /**
     * @description The name of the QRS worker.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $number;

    /**
     * @description The number of replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $partition;
    protected $_name = [
        'name'      => 'name',
        'number'    => 'number',
        'partition' => 'partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}
