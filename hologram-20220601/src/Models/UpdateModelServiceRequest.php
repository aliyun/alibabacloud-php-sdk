<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelServiceRequest extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $modelServiceName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var int
     */
    public $serviceCount;
    protected $_name = [
        'cpu' => 'cpu',
        'gpu' => 'gpu',
        'memory' => 'memory',
        'modelServiceName' => 'modelServiceName',
        'modelType' => 'modelType',
        'serviceCount' => 'serviceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->serviceCount) {
            $res['serviceCount'] = $this->serviceCount;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['serviceCount'])) {
            $model->serviceCount = $map['serviceCount'];
        }

        return $model;
    }
}
