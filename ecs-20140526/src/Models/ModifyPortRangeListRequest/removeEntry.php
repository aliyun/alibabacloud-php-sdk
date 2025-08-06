<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest;

use AlibabaCloud\Dara\Model;

class removeEntry extends Model
{
    /**
     * @var string
     */
    public $portRange;
    protected $_name = [
        'portRange' => 'PortRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
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
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        return $model;
    }
}
