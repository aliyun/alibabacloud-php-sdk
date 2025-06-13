<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody\secrityPolicyRelations\relatedListeners;

class secrityPolicyRelations extends Model
{
    /**
     * @var relatedListeners[]
     */
    public $relatedListeners;

    /**
     * @var string
     */
    public $securityPolicyId;
    protected $_name = [
        'relatedListeners' => 'RelatedListeners',
        'securityPolicyId' => 'SecurityPolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->relatedListeners)) {
            Model::validateArray($this->relatedListeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedListeners) {
            if (\is_array($this->relatedListeners)) {
                $res['RelatedListeners'] = [];
                $n1 = 0;
                foreach ($this->relatedListeners as $item1) {
                    $res['RelatedListeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
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
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n1 = 0;
                foreach ($map['RelatedListeners'] as $item1) {
                    $model->relatedListeners[$n1] = relatedListeners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        return $model;
    }
}
