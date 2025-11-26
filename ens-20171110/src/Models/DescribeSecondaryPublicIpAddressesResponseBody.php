<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesResponseBody\secondaryPublicIpAddresses;

class DescribeSecondaryPublicIpAddressesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secondaryPublicIpAddresses[]
     */
    public $secondaryPublicIpAddresses;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'secondaryPublicIpAddresses' => 'SecondaryPublicIpAddresses',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->secondaryPublicIpAddresses)) {
            Model::validateArray($this->secondaryPublicIpAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secondaryPublicIpAddresses) {
            if (\is_array($this->secondaryPublicIpAddresses)) {
                $res['SecondaryPublicIpAddresses'] = [];
                $n1 = 0;
                foreach ($this->secondaryPublicIpAddresses as $item1) {
                    $res['SecondaryPublicIpAddresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecondaryPublicIpAddresses'])) {
            if (!empty($map['SecondaryPublicIpAddresses'])) {
                $model->secondaryPublicIpAddresses = [];
                $n1 = 0;
                foreach ($map['SecondaryPublicIpAddresses'] as $item1) {
                    $model->secondaryPublicIpAddresses[$n1] = secondaryPublicIpAddresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
