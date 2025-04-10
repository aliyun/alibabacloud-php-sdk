<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineRequest\baselineItems;

class UpdateAccountFactoryBaselineRequest extends Model
{
    /**
     * @var string
     */
    public $baselineId;

    /**
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'baselineItems' => 'BaselineItems',
        'baselineName' => 'BaselineName',
        'description' => 'Description',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItems)) {
            Model::validateArray($this->baselineItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->baselineItems) {
            if (\is_array($this->baselineItems)) {
                $res['BaselineItems'] = [];
                $n1 = 0;
                foreach ($this->baselineItems as $item1) {
                    $res['BaselineItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n1 = 0;
                foreach ($map['BaselineItems'] as $item1) {
                    $model->baselineItems[$n1++] = baselineItems::fromMap($item1);
                }
            }
        }

        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
