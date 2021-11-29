<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveVersionOfConfigGroupRequest extends Model
{
    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'configGroupId' => 'ConfigGroupId',
        'env'           => 'Env',
        'ownerId'       => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveVersionOfConfigGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
