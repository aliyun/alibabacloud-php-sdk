<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers;

use AlibabaCloud\Dara\Model;

class memory extends Model
{
    /**
     * @var int
     */
    public $availableBytes;

    /**
     * @var int
     */
    public $cache;

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
    protected $_name = [
        'availableBytes' => 'AvailableBytes',
        'cache' => 'Cache',
        'rss' => 'Rss',
        'usageBytes' => 'UsageBytes',
        'workingSet' => 'WorkingSet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
