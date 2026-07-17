<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstancesQuotaResponseBody\quotaValues;

class ListInstancesQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaValueType;

    /**
     * @var quotaValues[]
     */
    public $quotaValues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'quotaValueType' => 'QuotaValueType',
        'quotaValues' => 'QuotaValues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->quotaValues)) {
            Model::validateArray($this->quotaValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaValueType) {
            $res['QuotaValueType'] = $this->quotaValueType;
        }

        if (null !== $this->quotaValues) {
            if (\is_array($this->quotaValues)) {
                $res['QuotaValues'] = [];
                $n1 = 0;
                foreach ($this->quotaValues as $item1) {
                    $res['QuotaValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['QuotaValueType'])) {
            $model->quotaValueType = $map['QuotaValueType'];
        }

        if (isset($map['QuotaValues'])) {
            if (!empty($map['QuotaValues'])) {
                $model->quotaValues = [];
                $n1 = 0;
                foreach ($map['QuotaValues'] as $item1) {
                    $model->quotaValues[$n1] = quotaValues::fromMap($item1);
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
