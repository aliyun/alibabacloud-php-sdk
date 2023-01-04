<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class logConfig extends Model
{
    /**
     * @description Indicates whether audit logging is enabled. Valid values:
     *
     *   true: Audit logging is enabled.
     *   false: Audit logging is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLog;

    /**
     * @description The name of the project of Log Service.
     *
     * @example audit-log-abc
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The number of days that logs are retained by Log Service.
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
