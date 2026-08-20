<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\useRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\useRule\validityPeriodRule\from;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\useRule\validityPeriodRule\to;

class validityPeriodRule extends Model
{
    /**
     * @var int[]
     */
    public $availableWeeks;

    /**
     * @var from
     */
    public $from;

    /**
     * @var to
     */
    public $to;

    /**
     * @var string[]
     */
    public $unavailableDates;
    protected $_name = [
        'availableWeeks' => 'AvailableWeeks',
        'from' => 'From',
        'to' => 'To',
        'unavailableDates' => 'UnavailableDates',
    ];

    public function validate()
    {
        if (\is_array($this->availableWeeks)) {
            Model::validateArray($this->availableWeeks);
        }
        if (null !== $this->from) {
            $this->from->validate();
        }
        if (null !== $this->to) {
            $this->to->validate();
        }
        if (\is_array($this->unavailableDates)) {
            Model::validateArray($this->unavailableDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableWeeks) {
            if (\is_array($this->availableWeeks)) {
                $res['AvailableWeeks'] = [];
                $n1 = 0;
                foreach ($this->availableWeeks as $item1) {
                    $res['AvailableWeeks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->from) {
            $res['From'] = null !== $this->from ? $this->from->toArray($noStream) : $this->from;
        }

        if (null !== $this->to) {
            $res['To'] = null !== $this->to ? $this->to->toArray($noStream) : $this->to;
        }

        if (null !== $this->unavailableDates) {
            if (\is_array($this->unavailableDates)) {
                $res['UnavailableDates'] = [];
                $n1 = 0;
                foreach ($this->unavailableDates as $item1) {
                    $res['UnavailableDates'][$n1] = $item1;
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
        if (isset($map['AvailableWeeks'])) {
            if (!empty($map['AvailableWeeks'])) {
                $model->availableWeeks = [];
                $n1 = 0;
                foreach ($map['AvailableWeeks'] as $item1) {
                    $model->availableWeeks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['From'])) {
            $model->from = from::fromMap($map['From']);
        }

        if (isset($map['To'])) {
            $model->to = to::fromMap($map['To']);
        }

        if (isset($map['UnavailableDates'])) {
            if (!empty($map['UnavailableDates'])) {
                $model->unavailableDates = [];
                $n1 = 0;
                foreach ($map['UnavailableDates'] as $item1) {
                    $model->unavailableDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
