<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApikeyAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApikeyAttributeResponseBody\items\consumer;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApikeyAttributeResponseBody\items\usageStatistics;

class items extends Model
{
    /**
     * @var consumer
     */
    public $consumer;

    /**
     * @var usageStatistics[]
     */
    public $usageStatistics;
    protected $_name = [
        'consumer' => 'Consumer',
        'usageStatistics' => 'UsageStatistics',
    ];

    public function validate()
    {
        if (null !== $this->consumer) {
            $this->consumer->validate();
        }
        if (\is_array($this->usageStatistics)) {
            Model::validateArray($this->usageStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumer) {
            $res['Consumer'] = null !== $this->consumer ? $this->consumer->toArray($noStream) : $this->consumer;
        }

        if (null !== $this->usageStatistics) {
            if (\is_array($this->usageStatistics)) {
                $res['UsageStatistics'] = [];
                $n1 = 0;
                foreach ($this->usageStatistics as $item1) {
                    $res['UsageStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Consumer'])) {
            $model->consumer = consumer::fromMap($map['Consumer']);
        }

        if (isset($map['UsageStatistics'])) {
            if (!empty($map['UsageStatistics'])) {
                $model->usageStatistics = [];
                $n1 = 0;
                foreach ($map['UsageStatistics'] as $item1) {
                    $model->usageStatistics[$n1] = usageStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
