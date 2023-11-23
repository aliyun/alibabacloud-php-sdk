<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaResponseBody\namespacedQuotas;
use AlibabaCloud\Tea\Model;

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
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespacedQuotas) {
            $res['NamespacedQuotas'] = [];
            if (null !== $this->namespacedQuotas && \is_array($this->namespacedQuotas)) {
                $n = 0;
                foreach ($this->namespacedQuotas as $item) {
                    $res['NamespacedQuotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLdpsNamespacedQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespacedQuotas'])) {
            if (!empty($map['NamespacedQuotas'])) {
                $model->namespacedQuotas = [];
                $n                       = 0;
                foreach ($map['NamespacedQuotas'] as $item) {
                    $model->namespacedQuotas[$n++] = null !== $item ? namespacedQuotas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
