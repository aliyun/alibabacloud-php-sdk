<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListProductDimensionGroupsRequest extends Model
{
    /**
     * @description The maximum number of records that can be returned for the query. Valid values: 1 to 200. Default value: 30.
     *
     * @example 30
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
     * @description The service code.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example oss
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'productCode' => 'ProductCode',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductDimensionGroupsRequest
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

        return $model;
    }
}
