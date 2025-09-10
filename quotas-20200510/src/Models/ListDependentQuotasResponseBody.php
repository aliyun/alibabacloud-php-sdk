<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponseBody\quotas;

class ListDependentQuotasResponseBody extends Model
{
    /**
     * @var quotas[]
     */
    public $quotas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotas' => 'Quotas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['Quotas'] = [];
                $n1 = 0;
                foreach ($this->quotas as $item1) {
                    $res['Quotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n1 = 0;
                foreach ($map['Quotas'] as $item1) {
                    $model->quotas[$n1] = quotas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
