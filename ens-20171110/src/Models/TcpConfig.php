<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class TcpConfig extends Model
{
    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var string
     */
    public $scheduler;
    protected $_name = [
        'establishedTimeout' => 'EstablishedTimeout',
        'persistenceTimeout' => 'PersistenceTimeout',
        'scheduler'          => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TcpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        return $model;
    }
}
