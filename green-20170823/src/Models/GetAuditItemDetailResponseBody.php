<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class GetAuditItemDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiResult;

    /**
     * @var string
     */
    public $apiRiskType;

    /**
     * @var string
     */
    public $apiTs;

    /**
     * @var string
     */
    public $newUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiResult'   => 'ApiResult',
        'apiRiskType' => 'ApiRiskType',
        'apiTs'       => 'ApiTs',
        'newUrl'      => 'NewUrl',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiResult) {
            $res['ApiResult'] = $this->apiResult;
        }
        if (null !== $this->apiRiskType) {
            $res['ApiRiskType'] = $this->apiRiskType;
        }
        if (null !== $this->apiTs) {
            $res['ApiTs'] = $this->apiTs;
        }
        if (null !== $this->newUrl) {
            $res['NewUrl'] = $this->newUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditItemDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiResult'])) {
            $model->apiResult = $map['ApiResult'];
        }
        if (isset($map['ApiRiskType'])) {
            $model->apiRiskType = $map['ApiRiskType'];
        }
        if (isset($map['ApiTs'])) {
            $model->apiTs = $map['ApiTs'];
        }
        if (isset($map['NewUrl'])) {
            $model->newUrl = $map['NewUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
