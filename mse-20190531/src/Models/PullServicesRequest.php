<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class PullServicesRequest extends Model
{
    /**
     * @description The data structure.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The namespace.
     *
     * @example gw-eccf313e2224438ba53d95d039e5****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The unique ID of the gateway.
     *
     * @example K8s
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'namespace'       => 'Namespace',
        'sourceType'      => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
