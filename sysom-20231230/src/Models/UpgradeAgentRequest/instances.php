<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentRequest;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $instance;
    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'instance' => 'instance',
        'region'   => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
