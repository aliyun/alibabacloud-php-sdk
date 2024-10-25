<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceBootConfigurationRequest extends Model
{
    /**
     * @example legacy
     *
     * @var string
     */
    public $bootSet;

    /**
     * @description This parameter is required.
     *
     * @example pxe
     *
     * @var string
     */
    public $bootType;

    /**
     * @example on
     *
     * @var string
     */
    public $diskSet;

    /**
     * @description This parameter is required.
     *
     * @example i-instance****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'bootSet'    => 'BootSet',
        'bootType'   => 'BootType',
        'diskSet'    => 'DiskSet',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceBootConfigurationRequest
     */
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
