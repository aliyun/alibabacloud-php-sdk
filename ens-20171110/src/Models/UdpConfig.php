<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UdpConfig extends Model
{
    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $scheduler;
    protected $_name = [
        'hashKey'   => 'HashKey',
        'scheduler' => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UdpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        return $model;
    }
}
