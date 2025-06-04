<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

class DescribeDedicatedHostsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var dedicatedHosts
     */
    public $dedicatedHosts;

    /**
     * @var int
     */
    public $maxAutoScaleHostStorage;

    /**
     * @var int
     */
    public $pageNumbers;

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
    public $totalRecords;
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHosts' => 'DedicatedHosts',
        'maxAutoScaleHostStorage' => 'MaxAutoScaleHostStorage',
        'pageNumbers' => 'PageNumbers',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedHosts) {
            $this->dedicatedHosts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = null !== $this->dedicatedHosts ? $this->dedicatedHosts->toArray($noStream) : $this->dedicatedHosts;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
