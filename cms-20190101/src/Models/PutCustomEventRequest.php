<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest\eventInfo;

class PutCustomEventRequest extends Model
{
    /**
     * @var eventInfo[]
     */
    public $eventInfo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eventInfo' => 'EventInfo',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->eventInfo)) {
            Model::validateArray($this->eventInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventInfo) {
            if (\is_array($this->eventInfo)) {
                $res['EventInfo'] = [];
                $n1 = 0;
                foreach ($this->eventInfo as $item1) {
                    $res['EventInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EventInfo'])) {
            if (!empty($map['EventInfo'])) {
                $model->eventInfo = [];
                $n1 = 0;
                foreach ($map['EventInfo'] as $item1) {
                    $model->eventInfo[$n1] = eventInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
