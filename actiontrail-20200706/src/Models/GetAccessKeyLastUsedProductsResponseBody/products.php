<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedProductsResponseBody;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @description The event details.
     *
     * @example {
     * "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
     * "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
     * "sourceIpAddress": "10.10.**.**",
     * "userIdentity": {
     * "accountId": "104758519118****",
     * "principalId": "24549429003625****",
     * }
     * @var string
     */
    public $detail;

    /**
     * @description The Alibaba Cloud service.
     *
     * @example Ecs
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The Chinese name of the Alibaba Cloud service.
     *
     * @example Elastic Compute Service (ECS)
     *
     * @var string
     */
    public $serviceNameCn;

    /**
     * @description The English name of the Alibaba Cloud service.
     *
     * @example Elastic Compute Service
     *
     * @var string
     */
    public $serviceNameEn;

    /**
     * @description The event source.
     *
     * Valid values:
     *
     *   Internal
     *
     * <!-- -->
     *
     *   ManagementEvent
     *
     * <!-- -->
     *
     *   DataEvent
     *
     * <!-- -->
     * @example ManagementEvent
     *
     * @var string
     */
    public $source;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Unit: millisecond.
     *
     * @example 1657247532000
     *
     * @var int
     */
    public $usedTimestamp;
    protected $_name = [
        'detail'        => 'Detail',
        'serviceName'   => 'ServiceName',
        'serviceNameCn' => 'ServiceNameCn',
        'serviceNameEn' => 'ServiceNameEn',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceNameCn) {
            $res['ServiceNameCn'] = $this->serviceNameCn;
        }
        if (null !== $this->serviceNameEn) {
            $res['ServiceNameEn'] = $this->serviceNameEn;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceNameCn'])) {
            $model->serviceNameCn = $map['ServiceNameCn'];
        }
        if (isset($map['ServiceNameEn'])) {
            $model->serviceNameEn = $map['ServiceNameEn'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }

        return $model;
    }
}
