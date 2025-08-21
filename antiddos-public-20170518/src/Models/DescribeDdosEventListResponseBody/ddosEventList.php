<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList\ddosEvent;

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
        if (\is_array($this->ddosEvent)) {
            Model::validateArray($this->ddosEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddosEvent) {
            if (\is_array($this->ddosEvent)) {
                $res['DdosEvent'] = [];
                $n1 = 0;
                foreach ($this->ddosEvent as $item1) {
                    $res['DdosEvent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DdosEvent'])) {
            if (!empty($map['DdosEvent'])) {
                $model->ddosEvent = [];
                $n1 = 0;
                foreach ($map['DdosEvent'] as $item1) {
                    $model->ddosEvent[$n1] = ddosEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
