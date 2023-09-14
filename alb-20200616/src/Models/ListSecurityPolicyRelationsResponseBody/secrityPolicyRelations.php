<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody\secrityPolicyRelations\relatedListeners;
use AlibabaCloud\Tea\Model;

class secrityPolicyRelations extends Model
{
    /**
     * @description The listeners that are associated with the security policy.
     *
     * @var relatedListeners[]
     */
    public $relatedListeners;

    /**
     * @description The security policy ID.
     *
     * @example scp-bp1bpn0kn9****
     *
     * @var string
     */
    public $securityPolicyId;
    protected $_name = [
        'relatedListeners' => 'RelatedListeners',
        'securityPolicyId' => 'SecurityPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = [];
            if (null !== $this->relatedListeners && \is_array($this->relatedListeners)) {
                $n = 0;
                foreach ($this->relatedListeners as $item) {
                    $res['RelatedListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secrityPolicyRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n                       = 0;
                foreach ($map['RelatedListeners'] as $item) {
                    $model->relatedListeners[$n++] = null !== $item ? relatedListeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        return $model;
    }
}
