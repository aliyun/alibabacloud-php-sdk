<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster;

use AlibabaCloud\Dara\Model;

class autoStopConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $idleTimeoutMinutes;
    protected $_name = [
        'enable' => 'enable',
        'idleTimeoutMinutes' => 'idleTimeoutMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->idleTimeoutMinutes) {
            $res['idleTimeoutMinutes'] = $this->idleTimeoutMinutes;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['idleTimeoutMinutes'])) {
            $model->idleTimeoutMinutes = $map['idleTimeoutMinutes'];
        }

        return $model;
    }
}
