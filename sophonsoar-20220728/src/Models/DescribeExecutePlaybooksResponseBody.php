<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksResponseBody\playbookMetrics;
use AlibabaCloud\Tea\Model;

class DescribeExecutePlaybooksResponseBody extends Model
{
    /**
     * @var playbookMetrics[]
     */
    public $playbookMetrics;

    /**
     * @example 88A39217-2802-5B1E-BA2B-CF1BBC43C1F5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookMetrics' => 'PlaybookMetrics',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookMetrics) {
            $res['PlaybookMetrics'] = [];
            if (null !== $this->playbookMetrics && \is_array($this->playbookMetrics)) {
                $n = 0;
                foreach ($this->playbookMetrics as $item) {
                    $res['PlaybookMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeExecutePlaybooksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybookMetrics'])) {
            if (!empty($map['PlaybookMetrics'])) {
                $model->playbookMetrics = [];
                $n                      = 0;
                foreach ($map['PlaybookMetrics'] as $item) {
                    $model->playbookMetrics[$n++] = null !== $item ? playbookMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
