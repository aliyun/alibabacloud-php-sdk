<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\QueryInstanceNcdResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $instanceId1;

    /**
     * @var string
     */
    public $instanceId2;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $ncd;
    protected $_name = [
        'instanceId1' => 'InstanceId1',
        'instanceId2' => 'InstanceId2',
        'instanceType' => 'InstanceType',
        'ncd' => 'Ncd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId1) {
            $res['InstanceId1'] = $this->instanceId1;
        }

        if (null !== $this->instanceId2) {
            $res['InstanceId2'] = $this->instanceId2;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ncd) {
            $res['Ncd'] = $this->ncd;
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
        if (isset($map['InstanceId1'])) {
            $model->instanceId1 = $map['InstanceId1'];
        }

        if (isset($map['InstanceId2'])) {
            $model->instanceId2 = $map['InstanceId2'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Ncd'])) {
            $model->ncd = $map['Ncd'];
        }

        return $model;
    }
}
