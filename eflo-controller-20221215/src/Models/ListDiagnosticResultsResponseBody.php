<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponseBody\diagnosticResults;
use AlibabaCloud\Tea\Model;

class ListDiagnosticResultsResponseBody extends Model
{
    /**
     * @description The diagnostic information.
     *
     * @var diagnosticResults[]
     */
    public $diagnosticResults;

    /**
     * @description Number of items per page in a paginated query. The maximum value is 100.
     *
     * Default value:
     *
     * - If no value is set or the set value is less than 20, the default value is 20.
     * - If the set value is greater than 100, the default value is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description NextToken for the next page. Include this value when requesting the next page.
     *
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example AC4F0004-7BCE-52E0-891B-CAC7D64E3368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosticResults' => 'DiagnosticResults',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosticResults) {
            $res['DiagnosticResults'] = [];
            if (null !== $this->diagnosticResults && \is_array($this->diagnosticResults)) {
                $n = 0;
                foreach ($this->diagnosticResults as $item) {
                    $res['DiagnosticResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnosticResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosticResults'])) {
            if (!empty($map['DiagnosticResults'])) {
                $model->diagnosticResults = [];
                $n = 0;
                foreach ($map['DiagnosticResults'] as $item) {
                    $model->diagnosticResults[$n++] = null !== $item ? diagnosticResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
