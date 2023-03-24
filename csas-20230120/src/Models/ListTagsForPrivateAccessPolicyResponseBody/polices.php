<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyResponseBody\polices\tags;
use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @example pa-policy-1b0d0e8b4bcf****
     *
     * @var string
     */
    public $policyId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'policyId' => 'PolicyId',
        'tags'     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return polices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
