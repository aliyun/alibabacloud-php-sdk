<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody\securityPolicies\relatedListeners;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody\securityPolicies\tags;

class securityPolicies extends Model
{
    /**
     * @var string
     */
    public $ciphers;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var relatedListeners[]
     */
    public $relatedListeners;
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
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'regionId'             => 'RegionId',
        'relatedListeners'     => 'RelatedListeners',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityPolicyId'     => 'SecurityPolicyId',
        'securityPolicyName'   => 'SecurityPolicyName',
        'securityPolicyStatus' => 'SecurityPolicyStatus',
        'tags'                 => 'Tags',
        'tlsVersion'           => 'TlsVersion',
    ];

    public function validate()
    {
        if (\is_array($this->relatedListeners)) {
            Model::validateArray($this->relatedListeners);
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
            $res['Ciphers'] = $this->ciphers;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relatedListeners) {
            if (\is_array($this->relatedListeners)) {
                $res['RelatedListeners'] = [];
                $n1                      = 0;
                foreach ($this->relatedListeners as $item1) {
                    $res['RelatedListeners'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
            $model->ciphers = $map['Ciphers'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n1                      = 0;
                foreach ($map['RelatedListeners'] as $item1) {
                    $model->relatedListeners[$n1++] = relatedListeners::fromMap($item1);
                }
            }
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TlsVersion'])) {
            $model->tlsVersion = $map['TlsVersion'];
        }

        return $model;
    }
}
