<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SetAdbSecureRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances. You can specify a maximum of 50 cloud phone instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The status of the ADB authentication feature.
     *
     * Valid values:
     *
     *   0: The ADB authentication feature is disabled.
     *   1: The ADB authentication feature is enabled.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAdbSecureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
