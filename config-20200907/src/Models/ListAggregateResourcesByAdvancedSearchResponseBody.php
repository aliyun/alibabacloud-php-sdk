<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourcesByAdvancedSearchResponseBody\queryResults;
use AlibabaCloud\Tea\Model;

class ListAggregateResourcesByAdvancedSearchResponseBody extends Model
{
    /**
     * @var queryResults
     */
    public $queryResults;

    /**
     * @example B0DBF868-460F-5E7C-8F76-1ACE2FCCE153
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResults' => 'QueryResults',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResults) {
            $res['QueryResults'] = null !== $this->queryResults ? $this->queryResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateResourcesByAdvancedSearchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryResults'])) {
            $model->queryResults = queryResults::fromMap($map['QueryResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
