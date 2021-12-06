<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList\ddosEvent;
use AlibabaCloud\Tea\Model;

class ddosEventList extends Model
{
    /**
     * @var ddosEvent[]
     */
    public $ddosEvent;
    protected $_name = [
        'ddosEvent' => 'DdosEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosEvent) {
            $res['DdosEvent'] = [];
            if (null !== $this->ddosEvent && \is_array($this->ddosEvent)) {
                $n = 0;
                foreach ($this->ddosEvent as $item) {
                    $res['DdosEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddosEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosEvent'])) {
            if (!empty($map['DdosEvent'])) {
                $model->ddosEvent = [];
                $n                = 0;
                foreach ($map['DdosEvent'] as $item) {
                    $model->ddosEvent[$n++] = null !== $item ? ddosEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
