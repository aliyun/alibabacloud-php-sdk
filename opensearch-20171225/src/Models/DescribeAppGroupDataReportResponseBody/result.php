<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result\receivedSample;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var receivedSample[]
     */
    public $receivedSample;

    /**
     * @var int
     */
    public $receivedCount;
    protected $_name = [
        'receivedSample' => 'receivedSample',
        'receivedCount'  => 'receivedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receivedSample) {
            $res['receivedSample'] = [];
            if (null !== $this->receivedSample && \is_array($this->receivedSample)) {
                $n = 0;
                foreach ($this->receivedSample as $item) {
                    $res['receivedSample'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->receivedCount) {
            $res['receivedCount'] = $this->receivedCount;
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
        if (isset($map['receivedSample'])) {
            if (!empty($map['receivedSample'])) {
                $model->receivedSample = [];
                $n                     = 0;
                foreach ($map['receivedSample'] as $item) {
                    $model->receivedSample[$n++] = null !== $item ? receivedSample::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['receivedCount'])) {
            $model->receivedCount = $map['receivedCount'];
        }

        return $model;
    }
}
