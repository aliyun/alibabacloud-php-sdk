<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaResponseBody\namespacedQuotas;

class GetLdpsNamespacedQuotaResponseBody extends Model
{
    /**
     * @var namespacedQuotas[]
     */
    public $namespacedQuotas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'namespacedQuotas' => 'NamespacedQuotas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->namespacedQuotas)) {
            Model::validateArray($this->namespacedQuotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespacedQuotas) {
            if (\is_array($this->namespacedQuotas)) {
                $res['NamespacedQuotas'] = [];
                $n1 = 0;
                foreach ($this->namespacedQuotas as $item1) {
                    $res['NamespacedQuotas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NamespacedQuotas'])) {
            if (!empty($map['NamespacedQuotas'])) {
                $model->namespacedQuotas = [];
                $n1 = 0;
                foreach ($map['NamespacedQuotas'] as $item1) {
                    $model->namespacedQuotas[$n1++] = namespacedQuotas::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
