<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodeInputOrOutputResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'tableName' => 'TableName',
        'data'      => 'Data',
        'nodeId'    => 'NodeId',
    ];

    public function validate()
    {
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
