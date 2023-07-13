<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\InvokeShellCommandRequest;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the Nth node instance on which the command is run.
     *
     * > This parameter specifies the node on which the command is run. If it is not specified, the command will be run on all nodes of the cluster.
     * @example i-bp1in9hmw3ur52x0****
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
