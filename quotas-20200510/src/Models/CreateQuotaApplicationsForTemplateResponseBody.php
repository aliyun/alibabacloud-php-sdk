<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateResponseBody\failResults;
use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationsForTemplateResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud accounts for which the quotas are applied.
     *
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @description The ID of the quota application batch.
     *
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @description The Alibaba Cloud accounts of the members in a resource directory whose quota increase request is rejected, and the reason for the rejection.
     *
     * @var failResults[]
     */
    public $failResults;

    /**
     * @description The request ID.
     *
     * @example 8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliyunUids'              => 'AliyunUids',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'failResults'             => 'FailResults',
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
        if (null !== $this->failResults) {
            $res['FailResults'] = [];
            if (null !== $this->failResults && \is_array($this->failResults)) {
                $n = 0;
                foreach ($this->failResults as $item) {
                    $res['FailResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FailResults'])) {
            if (!empty($map['FailResults'])) {
                $model->failResults = [];
                $n                  = 0;
                foreach ($map['FailResults'] as $item) {
                    $model->failResults[$n++] = null !== $item ? failResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
