<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class ModifyApplicationSpecShrinkRequest extends Model
{
    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
