<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayJobResponseBody;

use AlibabaCloud\Dara\Model;

class guHours extends Model
{
    /**
     * @var float
     */
    public $gpuHours;

    /**
     * @var string
     */
    public $gpuSpec;
    protected $_name = [
        'gpuHours' => 'gpuHours',
        'gpuSpec' => 'gpuSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuHours) {
            $res['gpuHours'] = $this->gpuHours;
        }

        if (null !== $this->gpuSpec) {
            $res['gpuSpec'] = $this->gpuSpec;
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
        if (isset($map['gpuHours'])) {
            $model->gpuHours = $map['gpuHours'];
        }

        if (isset($map['gpuSpec'])) {
            $model->gpuSpec = $map['gpuSpec'];
        }

        return $model;
    }
}
