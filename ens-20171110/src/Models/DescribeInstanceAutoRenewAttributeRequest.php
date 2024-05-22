<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceAutoRenewAttributeRequest extends Model
{
    /**
     * @description The ID of an instance. Separate multiple IDs with semicolons (;).
     *
     * This parameter is required.
     * @example i-5ci7l7k1m9m2zmhp4iw3o****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'ownerId'     => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
