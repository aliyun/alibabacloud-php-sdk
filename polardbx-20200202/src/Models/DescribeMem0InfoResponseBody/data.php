<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeMem0InfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeMem0InfoResponseBody\data\instance;

class data extends Model
{
    /**
     * @var instance
     */
    public $instance;
    protected $_name = [
        'instance' => 'Instance',
    ];

    public function validate()
    {
        if (null !== $this->instance) {
            $this->instance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toArray($noStream) : $this->instance;
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
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        return $model;
    }
}
