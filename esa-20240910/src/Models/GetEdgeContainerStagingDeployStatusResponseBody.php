<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerStagingDeployStatusResponseBody\podRestartState;
use AlibabaCloud\Tea\Model;

class GetEdgeContainerStagingDeployStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $containersReady;

    /**
     * @var string
     */
    public $creationTimestamp;

    /**
     * @var string
     */
    public $initialized;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var podRestartState
     */
    public $podRestartState;

    /**
     * @var string
     */
    public $ready;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scheduled;

    /**
     * @var string[]
     */
    public $VIPs;
    protected $_name = [
        'containersReady'   => 'ContainersReady',
        'creationTimestamp' => 'CreationTimestamp',
        'initialized'       => 'Initialized',
        'phase'             => 'Phase',
        'podRestartState'   => 'PodRestartState',
        'ready'             => 'Ready',
        'requestId'         => 'RequestId',
        'scheduled'         => 'Scheduled',
        'VIPs'              => 'VIPs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containersReady) {
            $res['ContainersReady'] = $this->containersReady;
        }
        if (null !== $this->creationTimestamp) {
            $res['CreationTimestamp'] = $this->creationTimestamp;
        }
        if (null !== $this->initialized) {
            $res['Initialized'] = $this->initialized;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->podRestartState) {
            $res['PodRestartState'] = null !== $this->podRestartState ? $this->podRestartState->toMap() : null;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduled) {
            $res['Scheduled'] = $this->scheduled;
        }
        if (null !== $this->VIPs) {
            $res['VIPs'] = $this->VIPs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeContainerStagingDeployStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainersReady'])) {
            $model->containersReady = $map['ContainersReady'];
        }
        if (isset($map['CreationTimestamp'])) {
            $model->creationTimestamp = $map['CreationTimestamp'];
        }
        if (isset($map['Initialized'])) {
            $model->initialized = $map['Initialized'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['PodRestartState'])) {
            $model->podRestartState = podRestartState::fromMap($map['PodRestartState']);
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scheduled'])) {
            $model->scheduled = $map['Scheduled'];
        }
        if (isset($map['VIPs'])) {
            if (!empty($map['VIPs'])) {
                $model->VIPs = $map['VIPs'];
            }
        }

        return $model;
    }
}
