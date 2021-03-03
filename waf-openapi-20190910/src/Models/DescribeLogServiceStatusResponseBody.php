<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponseBody\domainStatus;
use AlibabaCloud\Tea\Model;

class DescribeLogServiceStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainStatus[]
     */
    public $domainStatus;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'requestId'    => 'RequestId',
        'domainStatus' => 'DomainStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = [];
            if (null !== $this->domainStatus && \is_array($this->domainStatus)) {
                $n = 0;
                foreach ($this->domainStatus as $item) {
                    $res['DomainStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainStatus'])) {
            if (!empty($map['DomainStatus'])) {
                $model->domainStatus = [];
                $n                   = 0;
                foreach ($map['DomainStatus'] as $item) {
                    $model->domainStatus[$n++] = null !== $item ? domainStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
