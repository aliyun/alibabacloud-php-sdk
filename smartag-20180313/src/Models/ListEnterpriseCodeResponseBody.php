<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListEnterpriseCodeResponseBody\enterpriseCodes;
use AlibabaCloud\Tea\Model;

class ListEnterpriseCodeResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var enterpriseCodes[]
     */
    public $enterpriseCodes;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'maxResults'      => 'MaxResults',
        'enterpriseCodes' => 'EnterpriseCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->enterpriseCodes) {
            $res['EnterpriseCodes'] = [];
            if (null !== $this->enterpriseCodes && \is_array($this->enterpriseCodes)) {
                $n = 0;
                foreach ($this->enterpriseCodes as $item) {
                    $res['EnterpriseCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnterpriseCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['EnterpriseCodes'])) {
            if (!empty($map['EnterpriseCodes'])) {
                $model->enterpriseCodes = [];
                $n                      = 0;
                foreach ($map['EnterpriseCodes'] as $item) {
                    $model->enterpriseCodes[$n++] = null !== $item ? enterpriseCodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
