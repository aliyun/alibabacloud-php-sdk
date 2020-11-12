<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsResponse\policyVersions;
use AlibabaCloud\Tea\Model;

class ListPolicyVersionsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var policyVersions
     */
    public $policyVersions;
    protected $_name = [
        'requestId'      => 'RequestId',
        'policyVersions' => 'PolicyVersions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policyVersions', $this->policyVersions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policyVersions) {
            $res['PolicyVersions'] = null !== $this->policyVersions ? $this->policyVersions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyVersionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PolicyVersions'])) {
            $model->policyVersions = policyVersions::fromMap($map['PolicyVersions']);
        }

        return $model;
    }
}
