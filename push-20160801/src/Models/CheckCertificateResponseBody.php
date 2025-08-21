<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\developmentCertInfo;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponseBody\productionCertInfo;

class CheckCertificateResponseBody extends Model
{
    /**
     * @var bool
     */
    public $android;

    /**
     * @var developmentCertInfo
     */
    public $developmentCertInfo;

    /**
     * @var bool
     */
    public $IOS;

    /**
     * @var productionCertInfo
     */
    public $productionCertInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'android' => 'Android',
        'developmentCertInfo' => 'DevelopmentCertInfo',
        'IOS' => 'IOS',
        'productionCertInfo' => 'ProductionCertInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->developmentCertInfo) {
            $this->developmentCertInfo->validate();
        }
        if (null !== $this->productionCertInfo) {
            $this->productionCertInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }

        if (null !== $this->developmentCertInfo) {
            $res['DevelopmentCertInfo'] = null !== $this->developmentCertInfo ? $this->developmentCertInfo->toArray($noStream) : $this->developmentCertInfo;
        }

        if (null !== $this->IOS) {
            $res['IOS'] = $this->IOS;
        }

        if (null !== $this->productionCertInfo) {
            $res['ProductionCertInfo'] = null !== $this->productionCertInfo ? $this->productionCertInfo->toArray($noStream) : $this->productionCertInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
