<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionResponseBody\tenantEncryptions;

class DescribeTenantEncryptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantEncryptions[]
     */
    public $tenantEncryptions;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantEncryptions' => 'TenantEncryptions',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tenantEncryptions)) {
            Model::validateArray($this->tenantEncryptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantEncryptions) {
            if (\is_array($this->tenantEncryptions)) {
                $res['TenantEncryptions'] = [];
                $n1 = 0;
                foreach ($this->tenantEncryptions as $item1) {
                    $res['TenantEncryptions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['TenantEncryptions'])) {
            if (!empty($map['TenantEncryptions'])) {
                $model->tenantEncryptions = [];
                $n1 = 0;
                foreach ($map['TenantEncryptions'] as $item1) {
                    $model->tenantEncryptions[$n1++] = tenantEncryptions::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
