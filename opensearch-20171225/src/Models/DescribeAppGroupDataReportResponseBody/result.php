<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result\receivedSample;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $receivedCount;

    /**
     * @var receivedSample[]
     */
    public $receivedSample;
    protected $_name = [
        'receivedCount'  => 'receivedCount',
        'receivedSample' => 'receivedSample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receivedCount) {
            $res['receivedCount'] = $this->receivedCount;
        }
        if (null !== $this->receivedSample) {
            $res['receivedSample'] = [];
            if (null !== $this->receivedSample && \is_array($this->receivedSample)) {
                $n = 0;
                foreach ($this->receivedSample as $item) {
                    $res['receivedSample'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['receivedCount'])) {
            $model->receivedCount = $map['receivedCount'];
        }
        if (isset($map['receivedSample'])) {
            if (!empty($map['receivedSample'])) {
                $model->receivedSample = [];
                $n                     = 0;
                foreach ($map['receivedSample'] as $item) {
                    $model->receivedSample[$n++] = null !== $item ? receivedSample::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
