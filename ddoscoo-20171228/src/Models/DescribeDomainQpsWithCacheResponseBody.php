<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainQpsWithCacheResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $blocks;

    /**
     * @var string[]
     */
    public $cacheHits;

    /**
     * @var string[]
     */
    public $ccBlockQps;

    /**
     * @var string[]
     */
    public $ccJsQps;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string[]
     */
    public $ipBlockQps;

    /**
     * @var string[]
     */
    public $preciseBlocks;

    /**
     * @var string[]
     */
    public $preciseJsQps;

    /**
     * @var string[]
     */
    public $regionBlocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $totals;
    protected $_name = [
        'blocks' => 'Blocks',
        'cacheHits' => 'CacheHits',
        'ccBlockQps' => 'CcBlockQps',
        'ccJsQps' => 'CcJsQps',
        'interval' => 'Interval',
        'ipBlockQps' => 'IpBlockQps',
        'preciseBlocks' => 'PreciseBlocks',
        'preciseJsQps' => 'PreciseJsQps',
        'regionBlocks' => 'RegionBlocks',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'totals' => 'Totals',
    ];

    public function validate()
    {
        if (\is_array($this->blocks)) {
            Model::validateArray($this->blocks);
        }
        if (\is_array($this->cacheHits)) {
            Model::validateArray($this->cacheHits);
        }
        if (\is_array($this->ccBlockQps)) {
            Model::validateArray($this->ccBlockQps);
        }
        if (\is_array($this->ccJsQps)) {
            Model::validateArray($this->ccJsQps);
        }
        if (\is_array($this->ipBlockQps)) {
            Model::validateArray($this->ipBlockQps);
        }
        if (\is_array($this->preciseBlocks)) {
            Model::validateArray($this->preciseBlocks);
        }
        if (\is_array($this->preciseJsQps)) {
            Model::validateArray($this->preciseJsQps);
        }
        if (\is_array($this->regionBlocks)) {
            Model::validateArray($this->regionBlocks);
        }
        if (\is_array($this->totals)) {
            Model::validateArray($this->totals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blocks) {
            if (\is_array($this->blocks)) {
                $res['Blocks'] = [];
                $n1 = 0;
                foreach ($this->blocks as $item1) {
                    $res['Blocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cacheHits) {
            if (\is_array($this->cacheHits)) {
                $res['CacheHits'] = [];
                $n1 = 0;
                foreach ($this->cacheHits as $item1) {
                    $res['CacheHits'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ccBlockQps) {
            if (\is_array($this->ccBlockQps)) {
                $res['CcBlockQps'] = [];
                $n1 = 0;
                foreach ($this->ccBlockQps as $item1) {
                    $res['CcBlockQps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ccJsQps) {
            if (\is_array($this->ccJsQps)) {
                $res['CcJsQps'] = [];
                $n1 = 0;
                foreach ($this->ccJsQps as $item1) {
                    $res['CcJsQps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->ipBlockQps) {
            if (\is_array($this->ipBlockQps)) {
                $res['IpBlockQps'] = [];
                $n1 = 0;
                foreach ($this->ipBlockQps as $item1) {
                    $res['IpBlockQps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->preciseBlocks) {
            if (\is_array($this->preciseBlocks)) {
                $res['PreciseBlocks'] = [];
                $n1 = 0;
                foreach ($this->preciseBlocks as $item1) {
                    $res['PreciseBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->preciseJsQps) {
            if (\is_array($this->preciseJsQps)) {
                $res['PreciseJsQps'] = [];
                $n1 = 0;
                foreach ($this->preciseJsQps as $item1) {
                    $res['PreciseJsQps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionBlocks) {
            if (\is_array($this->regionBlocks)) {
                $res['RegionBlocks'] = [];
                $n1 = 0;
                foreach ($this->regionBlocks as $item1) {
                    $res['RegionBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->totals) {
            if (\is_array($this->totals)) {
                $res['Totals'] = [];
                $n1 = 0;
                foreach ($this->totals as $item1) {
                    $res['Totals'][$n1++] = $item1;
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
        if (isset($map['Blocks'])) {
            if (!empty($map['Blocks'])) {
                $model->blocks = [];
                $n1 = 0;
                foreach ($map['Blocks'] as $item1) {
                    $model->blocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CacheHits'])) {
            if (!empty($map['CacheHits'])) {
                $model->cacheHits = [];
                $n1 = 0;
                foreach ($map['CacheHits'] as $item1) {
                    $model->cacheHits[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CcBlockQps'])) {
            if (!empty($map['CcBlockQps'])) {
                $model->ccBlockQps = [];
                $n1 = 0;
                foreach ($map['CcBlockQps'] as $item1) {
                    $model->ccBlockQps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CcJsQps'])) {
            if (!empty($map['CcJsQps'])) {
                $model->ccJsQps = [];
                $n1 = 0;
                foreach ($map['CcJsQps'] as $item1) {
                    $model->ccJsQps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IpBlockQps'])) {
            if (!empty($map['IpBlockQps'])) {
                $model->ipBlockQps = [];
                $n1 = 0;
                foreach ($map['IpBlockQps'] as $item1) {
                    $model->ipBlockQps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PreciseBlocks'])) {
            if (!empty($map['PreciseBlocks'])) {
                $model->preciseBlocks = [];
                $n1 = 0;
                foreach ($map['PreciseBlocks'] as $item1) {
                    $model->preciseBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PreciseJsQps'])) {
            if (!empty($map['PreciseJsQps'])) {
                $model->preciseJsQps = [];
                $n1 = 0;
                foreach ($map['PreciseJsQps'] as $item1) {
                    $model->preciseJsQps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionBlocks'])) {
            if (!empty($map['RegionBlocks'])) {
                $model->regionBlocks = [];
                $n1 = 0;
                foreach ($map['RegionBlocks'] as $item1) {
                    $model->regionBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Totals'])) {
            if (!empty($map['Totals'])) {
                $model->totals = [];
                $n1 = 0;
                foreach ($map['Totals'] as $item1) {
                    $model->totals[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
