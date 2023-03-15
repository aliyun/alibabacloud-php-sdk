<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\developmentCertInfo;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\productionCertInfo;
use AlibabaCloud\Tea\Model;

class CheckCertificateResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $android;

    /**
     * @var developmentCertInfo
     */
    public $developmentCertInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $IOS;

    /**
     * @var productionCertInfo
     */
    public $productionCertInfo;

    /**
     * @example 9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'android'             => 'Android',
        'developmentCertInfo' => 'DevelopmentCertInfo',
        'IOS'                 => 'IOS',
        'productionCertInfo'  => 'ProductionCertInfo',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }
        if (null !== $this->developmentCertInfo) {
            $res['DevelopmentCertInfo'] = null !== $this->developmentCertInfo ? $this->developmentCertInfo->toMap() : null;
        }
        if (null !== $this->IOS) {
            $res['IOS'] = $this->IOS;
        }
        if (null !== $this->productionCertInfo) {
            $res['ProductionCertInfo'] = null !== $this->productionCertInfo ? $this->productionCertInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }
        if (isset($map['DevelopmentCertInfo'])) {
            $model->developmentCertInfo = developmentCertInfo::fromMap($map['DevelopmentCertInfo']);
        }
        if (isset($map['IOS'])) {
            $model->IOS = $map['IOS'];
        }
        if (isset($map['ProductionCertInfo'])) {
            $model->productionCertInfo = productionCertInfo::fromMap($map['ProductionCertInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
