<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput;

use AlibabaCloud\Dara\Model;

class gpuConfig extends Model
{
    /**
     * @var int
     */
    public $gpuMemorySize;

    /**
     * @var string
     */
    public $gpuType;
    protected $_name = [
        'gpuMemorySize' => 'gpuMemorySize',
        'gpuType' => 'gpuType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuMemorySize) {
            $res['gpuMemorySize'] = $this->gpuMemorySize;
        }

        if (null !== $this->gpuType) {
            $res['gpuType'] = $this->gpuType;
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
        if (isset($map['gpuMemorySize'])) {
            $model->gpuMemorySize = $map['gpuMemorySize'];
        }

        if (isset($map['gpuType'])) {
            $model->gpuType = $map['gpuType'];
        }

        return $model;
    }
}
