<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesRequest\dimensions;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationTemplatesRequest extends Model
{
    /**
     * @description The quota dimensions.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The ID of the quota item.
     *
     * @example 1****
     *
     * @var string
     */
    public $id;

    /**
     * @description The maximum number of records that can be returned for the query. Valid values: 1 to 100. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query.
     *
     * > If you leave this parameter empty, the query starts from the beginning.
     * @example 1
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
     * @description The ID of the quota.
     *
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The type of the quota. Valid values:
     *
     *   CommonQuota: general quota
     *   WhiteListLabel: privilege
     *   FlowControl: API rate limit
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;
    protected $_name = [
        'dimensions'      => 'Dimensions',
        'id'              => 'Id',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory'   => 'QuotaCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return ListQuotaApplicationTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
