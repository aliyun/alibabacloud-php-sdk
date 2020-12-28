<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponseBody\policyVersions;
use AlibabaCloud\Tea\Model;

class ListPolicyVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var policyVersions[]
     */
    public $policyVersions;
    protected $_name = [
        'requestId'      => 'RequestId',
        'policyVersions' => 'PolicyVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policyVersions) {
            $res['PolicyVersions'] = [];
            if (null !== $this->policyVersions && \is_array($this->policyVersions)) {
                $n = 0;
                foreach ($this->policyVersions as $item) {
                    $res['PolicyVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PolicyVersions'])) {
            if (!empty($map['PolicyVersions'])) {
                $model->policyVersions = [];
                $n                     = 0;
                foreach ($map['PolicyVersions'] as $item) {
                    $model->policyVersions[$n++] = null !== $item ? policyVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
