<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;

class ListQuotaUtilizationReportRequest extends Model
{
    /**
     * @var bool
     */
    public $adjustable;

    /**
     * @var string
     */
    public $keyWords;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaCategory;

    /**
     * @var string
     */
    public $quotaRegionId;

    /**
     * @var string[]
     */
    public $utilizationStatuses;
    protected $_name = [
        'adjustable' => 'Adjustable',
        'keyWords' => 'KeyWords',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'productCode' => 'ProductCode',
        'quotaCategory' => 'QuotaCategory',
        'quotaRegionId' => 'QuotaRegionId',
        'utilizationStatuses' => 'UtilizationStatuses',
    ];

    public function validate()
    {
        if (\is_array($this->utilizationStatuses)) {
            Model::validateArray($this->utilizationStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustable) {
            $res['Adjustable'] = $this->adjustable;
        }

        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
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

        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }

        if (null !== $this->quotaRegionId) {
            $res['QuotaRegionId'] = $this->quotaRegionId;
        }

        if (null !== $this->utilizationStatuses) {
            if (\is_array($this->utilizationStatuses)) {
                $res['UtilizationStatuses'] = [];
                $n1 = 0;
                foreach ($this->utilizationStatuses as $item1) {
                    $res['UtilizationStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Adjustable'])) {
            $model->adjustable = $map['Adjustable'];
        }

        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
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

        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }

        if (isset($map['QuotaRegionId'])) {
            $model->quotaRegionId = $map['QuotaRegionId'];
        }

        if (isset($map['UtilizationStatuses'])) {
            if (!empty($map['UtilizationStatuses'])) {
                $model->utilizationStatuses = [];
                $n1 = 0;
                foreach ($map['UtilizationStatuses'] as $item1) {
                    $model->utilizationStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
