<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponseBody\diagnosticResults;
use AlibabaCloud\Tea\Model;

class ListDiagnosticResultsResponseBody extends Model
{
    /**
     * @description Diagnostic information
     *
     * @var diagnosticResults[]
     */
    public $diagnosticResults;

    /**
     * @description 分页查询时每页行数。最大值为100。
     *
     * 默认值：
     *
     * •当不设置值或设置的值小于20时，默认值为20。
     *
     * •当设置的值大于100时，默认值为100。
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
     * @description ID of the request
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
