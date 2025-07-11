<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayResponseBody\gatewayConfigurationInfos;
use AlibabaCloud\Tea\Model;

class ListRenderingInstanceGatewayResponseBody extends Model
{
    /**
     * @var gatewayConfigurationInfos[]
     */
    public $gatewayConfigurationInfos;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'gatewayConfigurationInfos' => 'GatewayConfigurationInfos',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayConfigurationInfos) {
            $res['GatewayConfigurationInfos'] = [];
            if (null !== $this->gatewayConfigurationInfos && \is_array($this->gatewayConfigurationInfos)) {
                $n = 0;
                foreach ($this->gatewayConfigurationInfos as $item) {
                    $res['GatewayConfigurationInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRenderingInstanceGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayConfigurationInfos'])) {
            if (!empty($map['GatewayConfigurationInfos'])) {
                $model->gatewayConfigurationInfos = [];
                $n = 0;
                foreach ($map['GatewayConfigurationInfos'] as $item) {
                    $model->gatewayConfigurationInfos[$n++] = null !== $item ? gatewayConfigurationInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
