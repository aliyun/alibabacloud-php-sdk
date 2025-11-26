<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceBootConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $bootSet;

    /**
     * @var string
     */
    public $bootType;

    /**
     * @var string
     */
    public $diskSet;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'bootSet' => 'BootSet',
        'bootType' => 'BootType',
        'diskSet' => 'DiskSet',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootSet) {
            $res['BootSet'] = $this->bootSet;
        }

        if (null !== $this->bootType) {
            $res['BootType'] = $this->bootType;
        }

        if (null !== $this->diskSet) {
            $res['DiskSet'] = $this->diskSet;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['BootSet'])) {
            $model->bootSet = $map['BootSet'];
        }

        if (isset($map['BootType'])) {
            $model->bootType = $map['BootType'];
        }

        if (isset($map['DiskSet'])) {
            $model->diskSet = $map['DiskSet'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
