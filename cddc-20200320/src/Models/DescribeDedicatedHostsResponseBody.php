<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsResponseBody extends Model
{
    /**
     * @example dhg-6w7q18iwt5jo****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var dedicatedHosts
     */
    public $dedicatedHosts;

    /**
     * @example 3661824
     *
     * @var int
     */
    public $maxAutoScaleHostStorage;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example D6E068C3-25BC-455A-85FE-45F0B22EASER
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 40
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'dedicatedHostGroupId'    => 'DedicatedHostGroupId',
        'dedicatedHosts'          => 'DedicatedHosts',
        'maxAutoScaleHostStorage' => 'MaxAutoScaleHostStorage',
        'pageNumbers'             => 'PageNumbers',
        'pageSize'                => 'PageSize',
        'requestId'               => 'RequestId',
        'totalRecords'            => 'TotalRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = null !== $this->dedicatedHosts ? $this->dedicatedHosts->toMap() : null;
        }
        if (null !== $this->maxAutoScaleHostStorage) {
            $res['MaxAutoScaleHostStorage'] = $this->maxAutoScaleHostStorage;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHosts'])) {
            $model->dedicatedHosts = dedicatedHosts::fromMap($map['DedicatedHosts']);
        }
        if (isset($map['MaxAutoScaleHostStorage'])) {
            $model->maxAutoScaleHostStorage = $map['MaxAutoScaleHostStorage'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
