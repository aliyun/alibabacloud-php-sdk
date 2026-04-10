<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data\entitlements;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data\modelStats;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data\summary;

class data extends Model
{
    /**
     * @var entitlements[]
     */
    public $entitlements;

    /**
     * @var modelStats[]
     */
    public $modelStats;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'entitlements' => 'entitlements',
        'modelStats' => 'modelStats',
        'summary' => 'summary',
    ];

    public function validate()
    {
        if (\is_array($this->entitlements)) {
            Model::validateArray($this->entitlements);
        }
        if (\is_array($this->modelStats)) {
            Model::validateArray($this->modelStats);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entitlements) {
            if (\is_array($this->entitlements)) {
                $res['entitlements'] = [];
                $n1 = 0;
                foreach ($this->entitlements as $item1) {
                    $res['entitlements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelStats) {
            if (\is_array($this->modelStats)) {
                $res['modelStats'] = [];
                $n1 = 0;
                foreach ($this->modelStats as $item1) {
                    $res['modelStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
        if (isset($map['entitlements'])) {
            if (!empty($map['entitlements'])) {
                $model->entitlements = [];
                $n1 = 0;
                foreach ($map['entitlements'] as $item1) {
                    $model->entitlements[$n1] = entitlements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelStats'])) {
            if (!empty($map['modelStats'])) {
                $model->modelStats = [];
                $n1 = 0;
                foreach ($map['modelStats'] as $item1) {
                    $model->modelStats[$n1] = modelStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        return $model;
    }
}
