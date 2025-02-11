<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponseBody\securityPolicies\tags;

class securityPolicies extends Model
{
    /**
     * @var string[]
     */
    public $ciphers;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $securityPolicyId;
    /**
     * @var string
     */
    public $securityPolicyName;
    /**
     * @var string
     */
    public $securityPolicyStatus;
    /**
     * @var string[]
     */
    public $TLSVersions;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'createTime'           => 'CreateTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityPolicyId'     => 'SecurityPolicyId',
        'securityPolicyName'   => 'SecurityPolicyName',
        'securityPolicyStatus' => 'SecurityPolicyStatus',
        'TLSVersions'          => 'TLSVersions',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->ciphers)) {
            Model::validateArray($this->ciphers);
        }
        if (\is_array($this->TLSVersions)) {
            Model::validateArray($this->TLSVersions);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphers) {
            if (\is_array($this->ciphers)) {
                $res['Ciphers'] = [];
                $n1             = 0;
                foreach ($this->ciphers as $item1) {
                    $res['Ciphers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }

        if (null !== $this->securityPolicyStatus) {
            $res['SecurityPolicyStatus'] = $this->securityPolicyStatus;
        }

        if (null !== $this->TLSVersions) {
            if (\is_array($this->TLSVersions)) {
                $res['TLSVersions'] = [];
                $n1                 = 0;
                foreach ($this->TLSVersions as $item1) {
                    $res['TLSVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = [];
                $n1             = 0;
                foreach ($map['Ciphers'] as $item1) {
                    $model->ciphers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }

        if (isset($map['SecurityPolicyStatus'])) {
            $model->securityPolicyStatus = $map['SecurityPolicyStatus'];
        }

        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = [];
                $n1                 = 0;
                foreach ($map['TLSVersions'] as $item1) {
                    $model->TLSVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
