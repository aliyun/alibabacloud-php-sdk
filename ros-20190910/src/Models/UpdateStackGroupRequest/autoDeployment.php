<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;

use AlibabaCloud\Dara\Model;

class autoDeployment extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $retainStacksOnAccountRemoval;
    protected $_name = [
        'enabled' => 'Enabled',
        'retainStacksOnAccountRemoval' => 'RetainStacksOnAccountRemoval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->retainStacksOnAccountRemoval) {
            $res['RetainStacksOnAccountRemoval'] = $this->retainStacksOnAccountRemoval;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['RetainStacksOnAccountRemoval'])) {
            $model->retainStacksOnAccountRemoval = $map['RetainStacksOnAccountRemoval'];
        }

        return $model;
    }
}
