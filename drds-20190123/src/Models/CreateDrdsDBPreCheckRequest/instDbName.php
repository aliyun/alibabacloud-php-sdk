<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreCheckRequest;

use AlibabaCloud\Tea\Model;

class instDbName extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string[]
     */
    public $shardDbName;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'shardDbName'  => 'ShardDbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->shardDbName) {
            $res['ShardDbName'] = $this->shardDbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instDbName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['ShardDbName'])) {
            if (!empty($map['ShardDbName'])) {
                $model->shardDbName = $map['ShardDbName'];
            }
        }

        return $model;
    }
}
