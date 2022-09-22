<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\recentEvents\recentEvent;
use AlibabaCloud\Tea\Model;

class recentEvents extends Model
{
    /**
     * @var recentEvent[]
     */
    public $recentEvent;
    protected $_name = [
        'recentEvent' => 'RecentEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recentEvent) {
            $res['RecentEvent'] = [];
            if (null !== $this->recentEvent && \is_array($this->recentEvent)) {
                $n = 0;
                foreach ($this->recentEvent as $item) {
                    $res['RecentEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recentEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecentEvent'])) {
            if (!empty($map['RecentEvent'])) {
                $model->recentEvent = [];
                $n                  = 0;
                foreach ($map['RecentEvent'] as $item) {
                    $model->recentEvent[$n++] = null !== $item ? recentEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
