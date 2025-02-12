<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class GetPoolRequest extends Model
{
    /**
     * @var string
     */
    public $poolName;
    protected $_name = [
        'poolName' => 'PoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
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
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }

        return $model;
    }
}
