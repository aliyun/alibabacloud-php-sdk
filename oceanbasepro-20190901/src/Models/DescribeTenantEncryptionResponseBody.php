<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionResponseBody\tenantEncryptions;
use AlibabaCloud\Tea\Model;

class DescribeTenantEncryptionResponseBody extends Model
{
    /**
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tenantEncryptions[]
     */
    public $tenantEncryptions;

    /**
     * @example 8
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'         => 'RequestId',
        'tenantEncryptions' => 'TenantEncryptions',
        'totalCount'        => 'TotalCount',
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
        if (null !== $this->tenantEncryptions) {
            $res['TenantEncryptions'] = [];
            if (null !== $this->tenantEncryptions && \is_array($this->tenantEncryptions)) {
                $n = 0;
                foreach ($this->tenantEncryptions as $item) {
                    $res['TenantEncryptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantEncryptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantEncryptions'])) {
            if (!empty($map['TenantEncryptions'])) {
                $model->tenantEncryptions = [];
                $n                        = 0;
                foreach ($map['TenantEncryptions'] as $item) {
                    $model->tenantEncryptions[$n++] = null !== $item ? tenantEncryptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
