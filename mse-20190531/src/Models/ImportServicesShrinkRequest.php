<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ImportServicesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $serviceListShrink;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tlsSetting;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'gatewayUniqueId'   => 'GatewayUniqueId',
        'serviceListShrink' => 'ServiceList',
        'sourceType'        => 'SourceType',
        'tlsSetting'        => 'TlsSetting',
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
        if (null !== $this->serviceListShrink) {
            $res['ServiceList'] = $this->serviceListShrink;
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
     * @return ImportServicesShrinkRequest
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
        if (isset($map['ServiceList'])) {
            $model->serviceListShrink = $map['ServiceList'];
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
