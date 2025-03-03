<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsResponseBody\policyVersions;

class ListPolicyVersionsResponseBody extends Model
{
    /**
     * @var policyVersions
     */
    public $policyVersions;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyVersions' => 'PolicyVersions',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->policyVersions) {
            $this->policyVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyVersions) {
            $res['PolicyVersions'] = null !== $this->policyVersions ? $this->policyVersions->toArray($noStream) : $this->policyVersions;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyVersions'])) {
            $model->policyVersions = policyVersions::fromMap($map['PolicyVersions']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
