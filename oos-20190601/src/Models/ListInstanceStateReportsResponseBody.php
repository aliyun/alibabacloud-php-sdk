<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstanceStateReportsResponseBody\stateReports;
use AlibabaCloud\Tea\Model;

class ListInstanceStateReportsResponseBody extends Model
{
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
     * @var stateReports[]
     */
    public $stateReports;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'maxResults'   => 'MaxResults',
        'stateReports' => 'StateReports',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->stateReports) {
            $res['StateReports'] = [];
            if (null !== $this->stateReports && \is_array($this->stateReports)) {
                $n = 0;
                foreach ($this->stateReports as $item) {
                    $res['StateReports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceStateReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['StateReports'])) {
            if (!empty($map['StateReports'])) {
                $model->stateReports = [];
                $n                   = 0;
                foreach ($map['StateReports'] as $item) {
                    $model->stateReports[$n++] = null !== $item ? stateReports::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
