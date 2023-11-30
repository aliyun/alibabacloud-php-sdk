<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListDomainsRequest extends Model
{
    /**
     * @description The maximum number of results to return. Valid values: 1 to 100. Default value: 50.
     *
     * @example 60
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The ID of the parent domain.
     *
     * @example bj1
     *
     * @var string
     */
    public $parentDomainId;
    protected $_name = [
        'limit'          => 'limit',
        'marker'         => 'marker',
        'parentDomainId' => 'parent_domain_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->parentDomainId) {
            $res['parent_domain_id'] = $this->parentDomainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['parent_domain_id'])) {
            $model->parentDomainId = $map['parent_domain_id'];
        }

        return $model;
    }
}
