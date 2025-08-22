<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvServiceMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $matchedMsg;

    /**
     * @var int
     */
    public $matchedTargetCount;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceMonitorName;
    protected $_name = [
        'matchedMsg' => 'MatchedMsg',
        'matchedTargetCount' => 'MatchedTargetCount',
        'namespace' => 'Namespace',
        'serviceMonitorName' => 'ServiceMonitorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->serviceMonitorName) {
            $res['ServiceMonitorName'] = $this->serviceMonitorName;
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
        if (isset($map['MatchedMsg'])) {
            $model->matchedMsg = $map['MatchedMsg'];
        }

        if (isset($map['MatchedTargetCount'])) {
            $model->matchedTargetCount = $map['MatchedTargetCount'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ServiceMonitorName'])) {
            $model->serviceMonitorName = $map['ServiceMonitorName'];
        }

        return $model;
    }
}
