<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsResponseBody;

use AlibabaCloud\Tea\Model;

class objects extends Model
{
    /**
     * @description The domain name that is protected by the policy.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the policy.
     *
     * @example 47e07ebd-0ba5-4afc-957b-59d15b90****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The IP address of the Anti-DDoS Pro or Anti-DDoS Premium instance that is protected by the policy.
     *
     * @example 203.XX.XX.119
     *
     * @var string
     */
    public $vip;
    protected $_name = [
        'domain'   => 'Domain',
        'policyId' => 'PolicyId',
        'vip'      => 'Vip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        return $model;
    }
}
