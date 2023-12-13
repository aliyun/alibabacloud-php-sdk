<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description The size of the available memory. Unit: bytes.
     *
     * @example 4289445888
     *
     * @var int
     */
    public $availableBytes;

    /**
     * @description The size of the cache. Unit: bytes.
     *
     * @example 7028736
     *
     * @var int
     */
    public $cache;

    /**
     * @description The size of the resident memory set, which indicates the size of the physical memory that is actually used. Unit: bytes.
     *
     * @example 1593344
     *
     * @var int
     */
    public $rss;

    /**
     * @description The size of the used memory. Unit: bytes.
     *
     * @example 11153408
     *
     * @var int
     */
    public $usageBytes;

    /**
     * @description The usage of the working set. Unit: bytes.
     *
     * @example 5521408
     *
     * @var int
     */
    public $workingSet;
    protected $_name = [
        'availableBytes' => 'AvailableBytes',
        'cache'          => 'Cache',
        'rss'            => 'Rss',
        'usageBytes'     => 'UsageBytes',
        'workingSet'     => 'WorkingSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableBytes) {
            $res['AvailableBytes'] = $this->availableBytes;
        }
        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
        }
        if (null !== $this->rss) {
            $res['Rss'] = $this->rss;
        }
        if (null !== $this->usageBytes) {
            $res['UsageBytes'] = $this->usageBytes;
        }
        if (null !== $this->workingSet) {
            $res['WorkingSet'] = $this->workingSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableBytes'])) {
            $model->availableBytes = $map['AvailableBytes'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }
        if (isset($map['Rss'])) {
            $model->rss = $map['Rss'];
        }
        if (isset($map['UsageBytes'])) {
            $model->usageBytes = $map['UsageBytes'];
        }
        if (isset($map['WorkingSet'])) {
            $model->workingSet = $map['WorkingSet'];
        }

        return $model;
    }
}
