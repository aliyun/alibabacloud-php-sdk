<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The specification information of the node.
     *
     * @example mysql.n2.medium.xc
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'classCode',
        'zoneId'    => 'zoneId',
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
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
