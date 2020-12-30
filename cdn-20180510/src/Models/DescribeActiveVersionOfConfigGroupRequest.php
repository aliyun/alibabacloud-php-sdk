<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveVersionOfConfigGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $env;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'configGroupId' => 'ConfigGroupId',
        'env'           => 'Env',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}
