<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerOutput;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deploymentTaskID;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var string
     */
    public $nasConfigStr;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $traceID;

    /**
     * @var string
     */
    public $urlInternet;

    /**
     * @var string
     */
    public $urlIntranet;

    /**
     * @var string
     */
    public $vpcConfigStr;
    protected $_name = [
        'deploymentTaskID' => 'deploymentTaskID',
        'errorMessage' => 'errorMessage',
        'finished' => 'finished',
        'nasConfigStr' => 'nasConfigStr',
        'serviceName' => 'serviceName',
        'traceID' => 'traceID',
        'urlInternet' => 'urlInternet',
        'urlIntranet' => 'urlIntranet',
        'vpcConfigStr' => 'vpcConfigStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentTaskID) {
            $res['deploymentTaskID'] = $this->deploymentTaskID;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }

        if (null !== $this->nasConfigStr) {
            $res['nasConfigStr'] = $this->nasConfigStr;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->traceID) {
            $res['traceID'] = $this->traceID;
        }

        if (null !== $this->urlInternet) {
            $res['urlInternet'] = $this->urlInternet;
        }

        if (null !== $this->urlIntranet) {
            $res['urlIntranet'] = $this->urlIntranet;
        }

        if (null !== $this->vpcConfigStr) {
            $res['vpcConfigStr'] = $this->vpcConfigStr;
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
        if (isset($map['deploymentTaskID'])) {
            $model->deploymentTaskID = $map['deploymentTaskID'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }

        if (isset($map['nasConfigStr'])) {
            $model->nasConfigStr = $map['nasConfigStr'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['traceID'])) {
            $model->traceID = $map['traceID'];
        }

        if (isset($map['urlInternet'])) {
            $model->urlInternet = $map['urlInternet'];
        }

        if (isset($map['urlIntranet'])) {
            $model->urlIntranet = $map['urlIntranet'];
        }

        if (isset($map['vpcConfigStr'])) {
            $model->vpcConfigStr = $map['vpcConfigStr'];
        }

        return $model;
    }
}
