<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\binarySecurityPolicies;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c316702acdf5f45e1a9dc7fc52f21****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces.
     *
     * @var string[]
     */
    public $namespaces;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'namespaces' => 'Namespaces',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
        }

        return $model;
    }
}
