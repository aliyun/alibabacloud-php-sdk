<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks;
use AlibabaCloud\Tea\Model;

class DescribeCloudConnectNetworksResponseBody extends Model
{
    /**
     * @var cloudConnectNetworks
     */
    public $cloudConnectNetworks;

    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;
    protected $_name = [
        'cloudConnectNetworks' => 'CloudConnectNetworks',
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudConnectNetworks) {
            $res['CloudConnectNetworks'] = null !== $this->cloudConnectNetworks ? $this->cloudConnectNetworks->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudConnectNetworksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudConnectNetworks'])) {
            $model->cloudConnectNetworks = cloudConnectNetworks::fromMap($map['CloudConnectNetworks']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
