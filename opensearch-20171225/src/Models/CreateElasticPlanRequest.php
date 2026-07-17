<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class CreateElasticPlanRequest extends Model
{
    /**
     * @var string[]
     */
    public $customDates;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $elasticLcu;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $startHour;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'customDates' => 'customDates',
        'description' => 'description',
        'elasticLcu' => 'elasticLcu',
        'endHour' => 'endHour',
        'name' => 'name',
        'scheduleType' => 'scheduleType',
        'startHour' => 'startHour',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (\is_array($this->customDates)) {
            Model::validateArray($this->customDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customDates) {
            if (\is_array($this->customDates)) {
                $res['customDates'] = [];
                $n1 = 0;
                foreach ($this->customDates as $item1) {
                    $res['customDates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->elasticLcu) {
            $res['elasticLcu'] = $this->elasticLcu;
        }

        if (null !== $this->endHour) {
            $res['endHour'] = $this->endHour;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->startHour) {
            $res['startHour'] = $this->startHour;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['customDates'])) {
            if (!empty($map['customDates'])) {
                $model->customDates = [];
                $n1 = 0;
                foreach ($map['customDates'] as $item1) {
                    $model->customDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['elasticLcu'])) {
            $model->elasticLcu = $map['elasticLcu'];
        }

        if (isset($map['endHour'])) {
            $model->endHour = $map['endHour'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['startHour'])) {
            $model->startHour = $map['startHour'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
