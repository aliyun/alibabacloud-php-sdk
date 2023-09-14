<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsDetailForTemplateRequest extends Model
{
    /**
     * @example 135048337611****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example ecs.c5.large
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @example Agree
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunUid'               => 'AliyunUid',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'productCode'             => 'ProductCode',
        'quotaActionCode'         => 'QuotaActionCode',
        'quotaCategory'           => 'QuotaCategory',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaApplicationsDetailForTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
