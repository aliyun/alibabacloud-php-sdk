<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListClusterTypesRequest extends Model
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
     * @description The network type. Valid values:
     *
     *   slb
     *   eni
     *
     * @example slb
     *
     * @var string
     */
    public $connectType;

    /**
     * @description The edition of the MSE instance that you want to purchase.
     *
     *   mse_pro: Professional Edition
     *   mse_dev: Developer Edition
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The ID of the region in which the instance resides. The region is supported by Microservices Engine (MSE).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'connectType' => 'ConnectType',
        'mseVersion' => 'MseVersion',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
