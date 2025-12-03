<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource;

use AlibabaCloud\Dara\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $stepSize;
    protected $_name = [
        'maxSize' => 'MaxSize',
        'minSize' => 'MinSize',
        'stepSize' => 'StepSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }

        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }

        if (null !== $this->stepSize) {
            $res['StepSize'] = $this->stepSize;
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
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }

        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        if (isset($map['StepSize'])) {
            $model->stepSize = $map['StepSize'];
        }

        return $model;
    }
}
