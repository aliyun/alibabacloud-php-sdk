<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody\content;

use AlibabaCloud\Dara\Model;

class instanceInfos extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $ncd;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ncd'        => 'Ncd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ncd'])) {
            $model->ncd = $map['Ncd'];
        }

        return $model;
    }
}
