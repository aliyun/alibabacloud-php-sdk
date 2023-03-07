<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueRequest;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The name of the compute node that you want to move. Valid values of N: 1 to 100.
     *
     * You can call the [ListNodes](~~87161~~) operation to query the names of the compute nodes.
     * @example compute1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
    ];

    public function validate()
    {
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
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
