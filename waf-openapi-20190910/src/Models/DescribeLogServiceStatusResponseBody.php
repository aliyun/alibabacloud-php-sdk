<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponseBody\domainStatus;

class DescribeLogServiceStatusResponseBody extends Model
{
    /**
     * @var domainStatus[]
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainStatus' => 'DomainStatus',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->domainStatus)) {
            Model::validateArray($this->domainStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainStatus) {
            if (\is_array($this->domainStatus)) {
                $res['DomainStatus'] = [];
                $n1 = 0;
                foreach ($this->domainStatus as $item1) {
                    $res['DomainStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainStatus'])) {
            if (!empty($map['DomainStatus'])) {
                $model->domainStatus = [];
                $n1 = 0;
                foreach ($map['DomainStatus'] as $item1) {
                    $model->domainStatus[$n1] = domainStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
