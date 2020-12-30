<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @var int
     */
    public $rss;

    /**
     * @var int
     */
    public $usageBytes;

    /**
     * @var int
     */
    public $workingSet;

    /**
     * @var int
     */
    public $availableBytes;

    /**
     * @var int
     */
    public $cache;
    protected $_name = [
        'rss'            => 'Rss',
        'usageBytes'     => 'UsageBytes',
        'workingSet'     => 'WorkingSet',
        'availableBytes' => 'AvailableBytes',
        'cache'          => 'Cache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rss) {
            $res['Rss'] = $this->rss;
        }
        if (null !== $this->usageBytes) {
            $res['UsageBytes'] = $this->usageBytes;
        }
        if (null !== $this->workingSet) {
            $res['WorkingSet'] = $this->workingSet;
        }
        if (null !== $this->availableBytes) {
            $res['AvailableBytes'] = $this->availableBytes;
        }
        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
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
        if (isset($map['Rss'])) {
            $model->rss = $map['Rss'];
        }
        if (isset($map['UsageBytes'])) {
            $model->usageBytes = $map['UsageBytes'];
        }
        if (isset($map['WorkingSet'])) {
            $model->workingSet = $map['WorkingSet'];
        }
        if (isset($map['AvailableBytes'])) {
            $model->availableBytes = $map['AvailableBytes'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }

        return $model;
    }
}
