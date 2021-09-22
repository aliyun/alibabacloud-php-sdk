<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeServicePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $collectionName;
    protected $_name = [
        'spaceId'        => 'SpaceId',
        'requestId'      => 'RequestId',
        'policy'         => 'Policy',
        'policyName'     => 'PolicyName',
        'serviceName'    => 'ServiceName',
        'collectionName' => 'CollectionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServicePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }

        return $model;
    }
}
