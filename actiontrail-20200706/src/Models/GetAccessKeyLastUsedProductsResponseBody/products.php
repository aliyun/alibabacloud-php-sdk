<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedProductsResponseBody;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceNameCn;

    /**
     * @var string
     */
    public $serviceNameEn;

    /**
     * @var string
     */
    public $source;

    /**
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
