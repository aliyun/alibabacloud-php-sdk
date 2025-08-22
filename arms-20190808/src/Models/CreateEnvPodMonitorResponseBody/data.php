<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvPodMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $matchedMsg;

    /**
     * @var string
     */
    public $matchedTargetCount;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $podMonitorName;
    protected $_name = [
        'matchedMsg' => 'MatchedMsg',
        'matchedTargetCount' => 'MatchedTargetCount',
        'namespace' => 'Namespace',
        'podMonitorName' => 'PodMonitorName',
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

        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
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

        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }

        return $model;
    }
}
