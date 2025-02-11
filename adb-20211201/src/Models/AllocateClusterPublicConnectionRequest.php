<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AllocateClusterPublicConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $connectionStringPrefix;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBClusterId'            => 'DBClusterId',
        'engine'                 => 'Engine',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
