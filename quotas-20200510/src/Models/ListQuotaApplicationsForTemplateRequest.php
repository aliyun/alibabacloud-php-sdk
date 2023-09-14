<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsForTemplateRequest extends Model
{
    /**
     * @example 2023-05-22T16:00:00Z
     *
     * @var string
     */
    public $applyEndTime;

    /**
     * @example 2023-05-22T16:00:00Z
     *
     * @var string
     */
    public $applyStartTime;

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
     * @example ecs-spec
     *
     * @var string
     */
    public $productCode;

    /**
     * @example ecs.g5.2xlarge
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
    protected $_name = [
        'applyEndTime'            => 'ApplyEndTime',
        'applyStartTime'          => 'ApplyStartTime',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'productCode'             => 'ProductCode',
        'quotaActionCode'         => 'QuotaActionCode',
        'quotaCategory'           => 'QuotaCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyEndTime) {
            $res['ApplyEndTime'] = $this->applyEndTime;
        }
        if (null !== $this->applyStartTime) {
            $res['ApplyStartTime'] = $this->applyStartTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaApplicationsForTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyEndTime'])) {
            $model->applyEndTime = $map['ApplyEndTime'];
        }
        if (isset($map['ApplyStartTime'])) {
            $model->applyStartTime = $map['ApplyStartTime'];
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

        return $model;
    }
}
