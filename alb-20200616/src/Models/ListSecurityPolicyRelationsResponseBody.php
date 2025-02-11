<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody\secrityPolicyRelations;

class ListSecurityPolicyRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var secrityPolicyRelations[]
     */
    public $secrityPolicyRelations;
    protected $_name = [
        'requestId'              => 'RequestId',
        'secrityPolicyRelations' => 'SecrityPolicyRelations',
    ];

    public function validate()
    {
        if (\is_array($this->secrityPolicyRelations)) {
            Model::validateArray($this->secrityPolicyRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secrityPolicyRelations) {
            if (\is_array($this->secrityPolicyRelations)) {
                $res['SecrityPolicyRelations'] = [];
                $n1                            = 0;
                foreach ($this->secrityPolicyRelations as $item1) {
                    $res['SecrityPolicyRelations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecrityPolicyRelations'])) {
            if (!empty($map['SecrityPolicyRelations'])) {
                $model->secrityPolicyRelations = [];
                $n1                            = 0;
                foreach ($map['SecrityPolicyRelations'] as $item1) {
                    $model->secrityPolicyRelations[$n1++] = secrityPolicyRelations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
