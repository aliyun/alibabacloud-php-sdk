<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UpdateSpecNodeGroup extends Model
{
    /**
     * @var string
     */
    public $newInstanceType;

    /**
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'newInstanceType' => 'NewInstanceType',
        'nodeGroupId'     => 'NodeGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newInstanceType) {
            $res['NewInstanceType'] = $this->newInstanceType;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSpecNodeGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewInstanceType'])) {
            $model->newInstanceType = $map['NewInstanceType'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        return $model;
    }
}
