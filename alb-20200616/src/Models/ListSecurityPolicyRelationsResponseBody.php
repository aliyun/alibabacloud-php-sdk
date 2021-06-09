<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody\secrityPolicyRelations;
use AlibabaCloud\Tea\Model;

class ListSecurityPolicyRelationsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 安全策略关联关系
     *
     * @var secrityPolicyRelations[]
     */
    public $secrityPolicyRelations;
    protected $_name = [
        'requestId'              => 'RequestId',
        'secrityPolicyRelations' => 'SecrityPolicyRelations',
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
        if (null !== $this->secrityPolicyRelations) {
            $res['SecrityPolicyRelations'] = [];
            if (null !== $this->secrityPolicyRelations && \is_array($this->secrityPolicyRelations)) {
                $n = 0;
                foreach ($this->secrityPolicyRelations as $item) {
                    $res['SecrityPolicyRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityPolicyRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecrityPolicyRelations'])) {
            if (!empty($map['SecrityPolicyRelations'])) {
                $model->secrityPolicyRelations = [];
                $n                             = 0;
                foreach ($map['SecrityPolicyRelations'] as $item) {
                    $model->secrityPolicyRelations[$n++] = null !== $item ? secrityPolicyRelations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
