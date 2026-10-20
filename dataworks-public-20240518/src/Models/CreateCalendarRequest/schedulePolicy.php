<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateCalendarRequest;

use AlibabaCloud\Dara\Model;

class schedulePolicy extends Model
{
    /**
     * @var string[]
     */
    public $normalDates;

    /**
     * @var string[]
     */
    public $skipDates;
    protected $_name = [
        'normalDates' => 'NormalDates',
        'skipDates' => 'SkipDates',
    ];

    public function validate()
    {
        if (\is_array($this->normalDates)) {
            Model::validateArray($this->normalDates);
        }
        if (\is_array($this->skipDates)) {
            Model::validateArray($this->skipDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalDates) {
            if (\is_array($this->normalDates)) {
                $res['NormalDates'] = [];
                $n1 = 0;
                foreach ($this->normalDates as $item1) {
                    $res['NormalDates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skipDates) {
            if (\is_array($this->skipDates)) {
                $res['SkipDates'] = [];
                $n1 = 0;
                foreach ($this->skipDates as $item1) {
                    $res['SkipDates'][$n1] = $item1;
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
        if (isset($map['NormalDates'])) {
            if (!empty($map['NormalDates'])) {
                $model->normalDates = [];
                $n1 = 0;
                foreach ($map['NormalDates'] as $item1) {
                    $model->normalDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkipDates'])) {
            if (!empty($map['SkipDates'])) {
                $model->skipDates = [];
                $n1 = 0;
                foreach ($map['SkipDates'] as $item1) {
                    $model->skipDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
