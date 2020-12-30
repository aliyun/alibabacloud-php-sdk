<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody\dpiConfigError;
use AlibabaCloud\Tea\Model;

class ListDpiConfigErrorResponseBody extends Model
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
    public $total;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var dpiConfigError[]
     */
    public $dpiConfigError;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'total'          => 'Total',
        'maxResults'     => 'MaxResults',
        'dpiConfigError' => 'DpiConfigError',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->dpiConfigError) {
            $res['DpiConfigError'] = [];
            if (null !== $this->dpiConfigError && \is_array($this->dpiConfigError)) {
                $n = 0;
                foreach ($this->dpiConfigError as $item) {
                    $res['DpiConfigError'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDpiConfigErrorResponseBody
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['DpiConfigError'])) {
            if (!empty($map['DpiConfigError'])) {
                $model->dpiConfigError = [];
                $n                     = 0;
                foreach ($map['DpiConfigError'] as $item) {
                    $model->dpiConfigError[$n++] = null !== $item ? dpiConfigError::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
