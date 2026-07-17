<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeElasticPlanResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var int
     */
    public $created;

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
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var int
     */
    public $id;

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
     * @var int
     */
    public $updated;
    protected $_name = [
        'appGroupId' => 'appGroupId',
        'created' => 'created',
        'customDates' => 'customDates',
        'description' => 'description',
        'elasticLcu' => 'elasticLcu',
        'enabled' => 'enabled',
        'endHour' => 'endHour',
        'id' => 'id',
        'name' => 'name',
        'scheduleType' => 'scheduleType',
        'startHour' => 'startHour',
        'updated' => 'updated',
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
        if (null !== $this->appGroupId) {
            $res['appGroupId'] = $this->appGroupId;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

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

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->endHour) {
            $res['endHour'] = $this->endHour;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['appGroupId'])) {
            $model->appGroupId = $map['appGroupId'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

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

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['endHour'])) {
            $model->endHour = $map['endHour'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
