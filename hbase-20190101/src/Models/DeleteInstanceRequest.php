<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hb-bp16o0pd52e3y****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example false
     *
     * @var bool
     */
    public $immediateDeleteFlag;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'immediateDeleteFlag' => 'ImmediateDeleteFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->immediateDeleteFlag) {
            $res['ImmediateDeleteFlag'] = $this->immediateDeleteFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ImmediateDeleteFlag'])) {
            $model->immediateDeleteFlag = $map['ImmediateDeleteFlag'];
        }

        return $model;
    }
}
