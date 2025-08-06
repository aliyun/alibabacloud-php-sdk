<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Dara\Model;

class hibernationOptions extends Model
{
    /**
     * @var bool
     */
    public $configured;
    protected $_name = [
        'configured' => 'Configured',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
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
        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        return $model;
    }
}
