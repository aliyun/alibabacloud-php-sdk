<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest\serviceList;
use AlibabaCloud\Tea\Model;

class ImportServicesRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $fcAlias;

    /**
     * @var string
     */
    public $fcServiceName;

    /**
     * @var string
     */
    public $fcVersion;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-77e1153db6e14c0a8b1fae20bcb89ca5
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The information about services.
     *
     * @example DNS
     *
     * @var serviceList[]
     */
    public $serviceList;

    /**
     * @description The service source. Valid values:
     *
     *   MSE: MSE Nacos instance
     *   K8s: ACK cluster
     *   VIP: fixed address
     *   DNS: DNS domain
     *
     * @example DNS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The Transport Layer Security (TLS) settings. Valid values:
     *
     *   mode: TLS mode
     *   certId: certificate ID
     *   caCertId: CA certificate ID
     *   caCertContent: CA certificate public key
     *   sni: service name identification
     *
     * @example {
     * "mode": "MUTUAL",
     * "certId": "1*****-cn-hangzhou",
     * }
     * @var string
     */
    public $tlsSetting;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'fcAlias'         => 'FcAlias',
        'fcServiceName'   => 'FcServiceName',
        'fcVersion'       => 'FcVersion',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'serviceList'     => 'ServiceList',
        'sourceType'      => 'SourceType',
        'tlsSetting'      => 'TlsSetting',
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
        if (null !== $this->fcAlias) {
            $res['FcAlias'] = $this->fcAlias;
        }
        if (null !== $this->fcServiceName) {
            $res['FcServiceName'] = $this->fcServiceName;
        }
        if (null !== $this->fcVersion) {
            $res['FcVersion'] = $this->fcVersion;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = [];
            if (null !== $this->serviceList && \is_array($this->serviceList)) {
                $n = 0;
                foreach ($this->serviceList as $item) {
                    $res['ServiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = $this->tlsSetting;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['FcAlias'])) {
            $model->fcAlias = $map['FcAlias'];
        }
        if (isset($map['FcServiceName'])) {
            $model->fcServiceName = $map['FcServiceName'];
        }
        if (isset($map['FcVersion'])) {
            $model->fcVersion = $map['FcVersion'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['ServiceList'])) {
            if (!empty($map['ServiceList'])) {
                $model->serviceList = [];
                $n                  = 0;
                foreach ($map['ServiceList'] as $item) {
                    $model->serviceList[$n++] = null !== $item ? serviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = $map['TlsSetting'];
        }

        return $model;
    }
}
