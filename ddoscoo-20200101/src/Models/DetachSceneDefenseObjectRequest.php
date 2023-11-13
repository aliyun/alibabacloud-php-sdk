<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DetachSceneDefenseObjectRequest extends Model
{
    /**
     * @description The type of the object. Set the value to **Domain**, which indicates a domain name.
     *
     * @example Domain
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The protection asset that you want to remove from a policy. Separate multiple protection assets with commas (,).
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $objects;

    /**
     * @description The ID of the policy.
     *
     * > You can call the [DescribeSceneDefensePolicies](~~159382~~) operation to query the IDs of all policies.
     * @example 321a-fd31-df51-****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'objectType' => 'ObjectType',
        'objects'    => 'Objects',
        'policyId'   => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachSceneDefenseObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Objects'])) {
            $model->objects = $map['Objects'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
