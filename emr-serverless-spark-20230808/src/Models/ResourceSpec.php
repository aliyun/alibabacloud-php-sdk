<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ResourceSpec extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMachineNum;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $maxCu;
    protected $_name = [
        'cu' => 'cu',
        'gpu' => 'gpu',
        'gpuMachineNum' => 'gpuMachineNum',
        'instanceTypeId' => 'instanceTypeId',
        'maxCu' => 'maxCu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMachineNum) {
            $res['gpuMachineNum'] = $this->gpuMachineNum;
        }

        if (null !== $this->instanceTypeId) {
            $res['instanceTypeId'] = $this->instanceTypeId;
        }

        if (null !== $this->maxCu) {
            $res['maxCu'] = $this->maxCu;
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
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        if (isset($map['gpuMachineNum'])) {
            $model->gpuMachineNum = $map['gpuMachineNum'];
        }

        if (isset($map['instanceTypeId'])) {
            $model->instanceTypeId = $map['instanceTypeId'];
        }

        if (isset($map['maxCu'])) {
            $model->maxCu = $map['maxCu'];
        }

        return $model;
    }
}
