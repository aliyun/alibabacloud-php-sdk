<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\developmentCertInfo;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\productionCertInfo;
use AlibabaCloud\Tea\Model;

class CheckCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $android;

    /**
     * @var bool
     */
    public $IOS;

    /**
     * @var productionCertInfo
     */
    public $productionCertInfo;

    /**
     * @var developmentCertInfo
     */
    public $developmentCertInfo;
    protected $_name = [
        'requestId'           => 'RequestId',
        'android'             => 'Android',
        'IOS'                 => 'IOS',
        'productionCertInfo'  => 'ProductionCertInfo',
        'developmentCertInfo' => 'DevelopmentCertInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }
        if (null !== $this->IOS) {
            $res['IOS'] = $this->IOS;
        }
        if (null !== $this->productionCertInfo) {
            $res['ProductionCertInfo'] = null !== $this->productionCertInfo ? $this->productionCertInfo->toMap() : null;
        }
        if (null !== $this->developmentCertInfo) {
            $res['DevelopmentCertInfo'] = null !== $this->developmentCertInfo ? $this->developmentCertInfo->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }
        if (isset($map['IOS'])) {
            $model->IOS = $map['IOS'];
        }
        if (isset($map['ProductionCertInfo'])) {
            $model->productionCertInfo = productionCertInfo::fromMap($map['ProductionCertInfo']);
        }
        if (isset($map['DevelopmentCertInfo'])) {
            $model->developmentCertInfo = developmentCertInfo::fromMap($map['DevelopmentCertInfo']);
        }

        return $model;
    }
}
