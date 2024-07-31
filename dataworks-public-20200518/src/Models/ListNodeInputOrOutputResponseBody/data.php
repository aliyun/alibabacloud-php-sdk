<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the ancestor or descendant node.
     *
     * @example xxxx.123141254_out
     *
     * @var string
     */
    public $data;

    /**
     * @description The node ID.
     *
     * @example 1234667
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description This parameter does not take effect. You cannot obtain the parameter settings.
     *
     * @example dwd_xxx_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'data'      => 'Data',
        'nodeId'    => 'NodeId',
        'tableName' => 'TableName',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
