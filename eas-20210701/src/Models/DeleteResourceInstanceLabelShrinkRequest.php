<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteResourceInstanceLabelShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allInstances;
    /**
     * @var string
     */
    public $instanceIdsShrink;
    /**
     * @var string
     */
    public $keysShrink;
    protected $_name = [
        'allInstances'      => 'AllInstances',
        'instanceIdsShrink' => 'InstanceIds',
        'keysShrink'        => 'Keys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allInstances) {
            $res['AllInstances'] = $this->allInstances;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
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
        if (isset($map['AllInstances'])) {
            $model->allInstances = $map['AllInstances'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        return $model;
    }
}
