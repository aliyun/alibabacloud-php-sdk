<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationsForTemplateResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @example 8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliyunUids'              => 'AliyunUids',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUids) {
            $res['AliyunUids'] = $this->aliyunUids;
        }
        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaApplicationsForTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = $map['AliyunUids'];
            }
        }
        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
