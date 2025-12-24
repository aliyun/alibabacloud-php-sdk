<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksResponseBody\playbookMetrics;

class DescribeExecutePlaybooksResponseBody extends Model
{
    /**
     * @var playbookMetrics[]
     */
    public $playbookMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookMetrics' => 'PlaybookMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->playbookMetrics)) {
            Model::validateArray($this->playbookMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbookMetrics) {
            if (\is_array($this->playbookMetrics)) {
                $res['PlaybookMetrics'] = [];
                $n1 = 0;
                foreach ($this->playbookMetrics as $item1) {
                    $res['PlaybookMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybookMetrics'])) {
            if (!empty($map['PlaybookMetrics'])) {
                $model->playbookMetrics = [];
                $n1 = 0;
                foreach ($map['PlaybookMetrics'] as $item1) {
                    $model->playbookMetrics[$n1] = playbookMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
