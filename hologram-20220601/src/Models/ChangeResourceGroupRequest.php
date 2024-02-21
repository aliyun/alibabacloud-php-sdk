<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @example hgprecn-cn-zvp25ysv3006
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example rg-acfmxwerqwerasfd
     *
     * @var string
     */
    public $newResourceGroupId;
    protected $_name = [
        'instanceId'         => 'instanceId',
        'newResourceGroupId' => 'newResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->newResourceGroupId) {
            $res['newResourceGroupId'] = $this->newResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['newResourceGroupId'])) {
            $model->newResourceGroupId = $map['newResourceGroupId'];
        }

        return $model;
    }
}
