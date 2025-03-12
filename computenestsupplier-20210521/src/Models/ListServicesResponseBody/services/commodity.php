<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @description The commodity code.
     *
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The configuration metadata related to Saas Boost.
     *
     * @example { // Specifies whether to associate the service with the SaaS Boost commodity. Default value: false. "Enabled":true/false // The public endpoint of the SaaS Boost instance. "PublicAccessUrl":"https://example.com" }
     *
     * @var string
     */
    public $saasBoostMetadata;

    /**
     * @description The platform type. Valid values:
     *
     *   marketplace: Alibaba Cloud Marketplace.
     *   Css: Lingxiao.
     *   SaasBoost: Saas Boost.
     *
     * @example Marketplace
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'commodityCode'     => 'CommodityCode',
        'saasBoostMetadata' => 'SaasBoostMetadata',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
