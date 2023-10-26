<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvPodMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description target matching prompt information.
     *
     * @example Match successful.
     *
     * @var string
     */
    public $matchedMsg;

    /**
     * @description The number of matched targets.
     *
     * @example 1
     *
     * @var string
     */
    public $matchedTargetCount;

    /**
     * @description The namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Successfully created podMonitor name.
     *
     * @example arms-admin-pm1
     *
     * @var string
     */
    public $podMonitorName;
    protected $_name = [
        'matchedMsg'         => 'MatchedMsg',
        'matchedTargetCount' => 'MatchedTargetCount',
        'namespace'          => 'Namespace',
        'podMonitorName'     => 'PodMonitorName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchedMsg) {
            $res['MatchedMsg'] = $this->matchedMsg;
        }
        if (null !== $this->matchedTargetCount) {
            $res['MatchedTargetCount'] = $this->matchedTargetCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchedMsg'])) {
            $model->matchedMsg = $map['MatchedMsg'];
        }
        if (isset($map['MatchedTargetCount'])) {
            $model->matchedTargetCount = $map['MatchedTargetCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }

        return $model;
    }
}
