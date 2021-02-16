<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponseBody;

use AlibabaCloud\Tea\Model;

class DBNodeIds extends Model
{
    /**
     * @var string[]
     */
    public $DBNodeId;
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            if (!empty($map['DBNodeId'])) {
                $model->DBNodeId = $map['DBNodeId'];
            }
        }

        return $model;
    }
}
