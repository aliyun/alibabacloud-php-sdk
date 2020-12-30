<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $stepSize;

    /**
     * @var int
     */
    public $minSize;
    protected $_name = [
        'maxSize'  => 'MaxSize',
        'stepSize' => 'StepSize',
        'minSize'  => 'MinSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->stepSize) {
            $res['StepSize'] = $this->stepSize;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceStorageRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['StepSize'])) {
            $model->stepSize = $map['StepSize'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        return $model;
    }
}
