<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsRequest\dimensions;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The quota dimensions.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The keyword that you want to use to search for the application.
     *
     * @example Cluster
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The maximum number of records that can be returned for the query.
     *
     * Valid values: 1 to 200. Default value: 30.
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query. If you leave this parameter empty, the query starts from the beginning.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example csk
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_i5uzm3
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The type of the quota. Valid values:
     *
     *   CommonQuota: general quota
     *   FlowControl: API rate limit
     *   WhiteListLabel: whitelist quota
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The status of the application. Valid values:
     *
     *   Disagree: rejects the application.
     *   Agree: approves the application.
     *   Process: reviews the application.
     *   Cancel: cancels the application.
     *
     * @example Agree
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'dimensions'      => 'Dimensions',
        'keyWord'         => 'KeyWord',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory'   => 'QuotaCategory',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
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
     * @return ListQuotaApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
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
