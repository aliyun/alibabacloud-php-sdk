<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class logConfig extends Model
{
    /**
     * @description Indicates whether audit logs are enabled. Valid values: - true: audit logs are enabled. - false: audit logs are disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableLog;

    /**
     * @description The name of the Log Service project.
     *
     * @example k8s-log-abc
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The retention period of the logs.
     *
     * @example 7
     *
     * @var string
     */
    public $logStoreTTL;
    protected $_name = [
        'enableLog'   => 'EnableLog',
        'logProject'  => 'LogProject',
        'logStoreTTL' => 'LogStoreTTL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableLog) {
            $res['EnableLog'] = $this->enableLog;
        }
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStoreTTL) {
            $res['LogStoreTTL'] = $this->logStoreTTL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableLog'])) {
            $model->enableLog = $map['EnableLog'];
        }
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStoreTTL'])) {
            $model->logStoreTTL = $map['LogStoreTTL'];
        }

        return $model;
    }
}
