<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var reports[]
     */
    public $reports;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'reports'   => 'Reports',
        'requestId' => 'RequestId',
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
        if (null !== $this->reports) {
            $res['Reports'] = [];
            if (null !== $this->reports && \is_array($this->reports)) {
                $n = 0;
                foreach ($this->reports as $item) {
                    $res['Reports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Reports'])) {
            if (!empty($map['Reports'])) {
                $model->reports = [];
                $n              = 0;
                foreach ($map['Reports'] as $item) {
                    $model->reports[$n++] = null !== $item ? reports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
