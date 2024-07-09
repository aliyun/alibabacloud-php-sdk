<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters;

use AlibabaCloud\Tea\Model;

class autoStopConfiguration extends Model
{
    /**
     * @description Indicates whether automatic termination is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The idle timeout period. The SQL Compute is automatically terminated if the idle timeout period is exceeded.
     *
     * @example 45
     *
     * @var int
     */
    public $idleTimeoutMinutes;
    protected $_name = [
        'enable'             => 'enable',
        'idleTimeoutMinutes' => 'idleTimeoutMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return autoStopConfiguration
     */
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
