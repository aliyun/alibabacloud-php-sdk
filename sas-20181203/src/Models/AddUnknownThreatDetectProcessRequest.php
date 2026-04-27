<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddUnknownThreatDetectProcessRequest\processList;

class AddUnknownThreatDetectProcessRequest extends Model
{
    /**
     * @var int[]
     */
    public $eventIdList;

    /**
     * @var processList[]
     */
    public $processList;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'eventIdList' => 'EventIdList',
        'processList' => 'ProcessList',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->eventIdList)) {
            Model::validateArray($this->eventIdList);
        }
        if (\is_array($this->processList)) {
            Model::validateArray($this->processList);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventIdList) {
            if (\is_array($this->eventIdList)) {
                $res['EventIdList'] = [];
                $n1 = 0;
                foreach ($this->eventIdList as $item1) {
                    $res['EventIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processList) {
            if (\is_array($this->processList)) {
                $res['ProcessList'] = [];
                $n1 = 0;
                foreach ($this->processList as $item1) {
                    $res['ProcessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1 = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1] = $item1;
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
        if (isset($map['EventIdList'])) {
            if (!empty($map['EventIdList'])) {
                $model->eventIdList = [];
                $n1 = 0;
                foreach ($map['EventIdList'] as $item1) {
                    $model->eventIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProcessList'])) {
            if (!empty($map['ProcessList'])) {
                $model->processList = [];
                $n1 = 0;
                foreach ($map['ProcessList'] as $item1) {
                    $model->processList[$n1] = processList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1 = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
