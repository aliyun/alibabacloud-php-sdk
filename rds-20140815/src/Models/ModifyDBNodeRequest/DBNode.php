<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The instance type of the node.
     *
     * @example mysql.n2.medium.xc
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The node ID.
     *
     * @example rn-6256r4a87xvv7he5p
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'classCode' => 'classCode',
        'nodeId'    => 'nodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['classCode'] = $this->classCode;
        }
        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['classCode'])) {
            $model->classCode = $map['classCode'];
        }
        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        return $model;
    }
}
