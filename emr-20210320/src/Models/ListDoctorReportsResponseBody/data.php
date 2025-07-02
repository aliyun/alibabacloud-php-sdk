<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponseBody\data\summaryReport;

class data extends Model
{
    /**
     * @var string[]
     */
    public $componentTypes;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var summaryReport
     */
    public $summaryReport;
    protected $_name = [
        'componentTypes' => 'ComponentTypes',
        'dateTime' => 'DateTime',
        'summaryReport' => 'SummaryReport',
    ];

    public function validate()
    {
        if (\is_array($this->componentTypes)) {
            Model::validateArray($this->componentTypes);
        }
        if (null !== $this->summaryReport) {
            $this->summaryReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentTypes) {
            if (\is_array($this->componentTypes)) {
                $res['ComponentTypes'] = [];
                $n1 = 0;
                foreach ($this->componentTypes as $item1) {
                    $res['ComponentTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        if (null !== $this->summaryReport) {
            $res['SummaryReport'] = null !== $this->summaryReport ? $this->summaryReport->toArray($noStream) : $this->summaryReport;
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
        if (isset($map['ComponentTypes'])) {
            if (!empty($map['ComponentTypes'])) {
                $model->componentTypes = [];
                $n1 = 0;
                foreach ($map['ComponentTypes'] as $item1) {
                    $model->componentTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        if (isset($map['SummaryReport'])) {
            $model->summaryReport = summaryReport::fromMap($map['SummaryReport']);
        }

        return $model;
    }
}
