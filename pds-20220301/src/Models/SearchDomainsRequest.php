<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchDomainsRequest extends Model
{
    /**
     * @description 预付费domain支持按订单实例ID搜索，通过下单接口获取对应的实例ID
     *
     * @example pds_trc_public_cn-h033e720j01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of results to return. Valid values: 1 to 100. Default value: 100.
     *
     * The number of returned results must be less than or equal to the specified number.
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\
     * By default, this parameter is empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The name of the domain. Fuzzy search is supported.
     *
     * @var string
     */
    public $name;

    /**
     * @description The sorting rule. Set the value to created_at, which specifies that the results are sorted based on the time when the domain was created.
     *
     * @example created_at
     *
     * @var string
     */
    public $orderBy;
    protected $_name = [
        'instanceId' => 'instance_id',
        'limit'      => 'limit',
        'marker'     => 'marker',
        'name'       => 'name',
        'orderBy'    => 'order_by',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        return $model;
    }
}
