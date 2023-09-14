<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListProductQuotaDimensionsRequest extends Model
{
    /**
     * @description The maximum number of records that can be returned for the query.
     *
     * Valid values: 1 to 200. Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query. If you leave this parameter empty, the query starts from the beginning.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the quota. Valid values:
     *
     *   FlowControl: API rate limit.
     *   CommonQuota: general quota. This is the default value.
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'productCode'   => 'ProductCode',
        'quotaCategory' => 'QuotaCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductQuotaDimensionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
