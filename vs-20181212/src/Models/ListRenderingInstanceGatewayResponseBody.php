<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayResponseBody\gatewayConfigurationInfos;

class ListRenderingInstanceGatewayResponseBody extends Model
{
    /**
     * @var gatewayConfigurationInfos[]
     */
    public $gatewayConfigurationInfos;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        if (\is_array($this->gatewayConfigurationInfos)) {
            Model::validateArray($this->gatewayConfigurationInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayConfigurationInfos) {
            if (\is_array($this->gatewayConfigurationInfos)) {
                $res['GatewayConfigurationInfos'] = [];
                $n1 = 0;
                foreach ($this->gatewayConfigurationInfos as $item1) {
                    $res['GatewayConfigurationInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayConfigurationInfos'])) {
            if (!empty($map['GatewayConfigurationInfos'])) {
                $model->gatewayConfigurationInfos = [];
                $n1 = 0;
                foreach ($map['GatewayConfigurationInfos'] as $item1) {
                    $model->gatewayConfigurationInfos[$n1++] = gatewayConfigurationInfos::fromMap($item1);
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
