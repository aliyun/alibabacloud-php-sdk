<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeBriefDedicatedHostsResponseBody\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class DescribeBriefDedicatedHostsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalRecords;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var dedicatedHosts[]
     */
    public $dedicatedHosts;
    protected $_name = [
        'totalRecords'         => 'TotalRecords',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumbers'          => 'PageNumbers',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHosts'       => 'DedicatedHosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = [];
            if (null !== $this->dedicatedHosts && \is_array($this->dedicatedHosts)) {
                $n = 0;
                foreach ($this->dedicatedHosts as $item) {
                    $res['DedicatedHosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBriefDedicatedHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHosts'])) {
            if (!empty($map['DedicatedHosts'])) {
                $model->dedicatedHosts = [];
                $n                     = 0;
                foreach ($map['DedicatedHosts'] as $item) {
                    $model->dedicatedHosts[$n++] = null !== $item ? dedicatedHosts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
