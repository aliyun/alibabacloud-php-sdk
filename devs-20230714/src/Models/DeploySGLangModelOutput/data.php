<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeploySGLangModelOutput;

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
    public $modelName;

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
    protected $_name = [
        'deploymentTaskID' => 'deploymentTaskID',
        'errorMessage' => 'errorMessage',
        'finished' => 'finished',
        'modelName' => 'modelName',
        'serviceName' => 'serviceName',
        'traceID' => 'traceID',
        'urlInternet' => 'urlInternet',
        'urlIntranet' => 'urlIntranet',
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

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
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

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
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

        return $model;
    }
}
