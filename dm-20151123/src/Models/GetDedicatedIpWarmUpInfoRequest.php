<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetDedicatedIpWarmUpInfoRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedIp;
    protected $_name = [
        'dedicatedIp' => 'DedicatedIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedIp) {
            $res['DedicatedIp'] = $this->dedicatedIp;
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
        if (isset($map['DedicatedIp'])) {
            $model->dedicatedIp = $map['DedicatedIp'];
        }

        return $model;
    }
}
