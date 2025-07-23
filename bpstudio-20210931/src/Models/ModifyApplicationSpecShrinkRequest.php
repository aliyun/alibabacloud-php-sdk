<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ModifyApplicationSpecShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 02S7UU41WKJL7ERR
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $instanceSpecShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceSpecShrink' => 'InstanceSpec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->instanceSpecShrink) {
            $res['InstanceSpec'] = $this->instanceSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApplicationSpecShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpecShrink = $map['InstanceSpec'];
        }

        return $model;
    }
}
