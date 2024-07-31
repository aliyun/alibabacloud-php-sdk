<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\CreateAccountFactoryBaselineRequest\baselineItems;
use AlibabaCloud\Tea\Model;

class CreateAccountFactoryBaselineRequest extends Model
{
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
     * @description RegionId
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'baselineItems' => 'BaselineItems',
        'baselineName'  => 'BaselineName',
        'description'   => 'Description',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateAccountFactoryBaselineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
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
