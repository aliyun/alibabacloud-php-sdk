<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class HandleUnknownThreatDetectEventRequest extends Model
{
    /**
     * @var string[]
     */
    public $eventIdList;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'eventIdList' => 'EventIdList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->eventIdList)) {
            Model::validateArray($this->eventIdList);
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
