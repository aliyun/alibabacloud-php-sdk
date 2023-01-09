<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data of the node.
     *
     * @example cluster
     *
     * @var string
     */
    public $data;

    /**
     * @description Indicates whether the node information was returned. Valid values:
     *
     *   `true`: The node information was returned.
     *   `false`: The node information failed to be returned.
     *
     * @example true
     *
     * @var bool
     */
    public $dir;

    /**
     * @description The name of the node.
     *
     * @example mse-bc1a29b0-160230875****-reg-center-0-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The path of the node.
     *
     * @example /zookeeper
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'data' => 'Data',
        'dir'  => 'Dir',
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
