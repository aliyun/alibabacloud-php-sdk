<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateMachineGroupMachineRequest extends Model
{
    /**
     * @description The operation on the machine. Valid values: add and delete. A value of add specifies to add the machine to the machine group. A value of delete specifies to remove the machine from the machine group.
     *
     * @example add
     *
     * @var string
     */
    public $action;

    /**
     * @description The machines to be added or removed.
     *
     * This parameter is required.
     * @var string[]
     */
    public $body;
    protected $_name = [
        'action' => 'action',
        'body'   => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMachineGroupMachineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = $map['body'];
            }
        }

        return $model;
    }
}
