<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponseBody\resultContent\value;

use AlibabaCloud\Tea\Model;

class circuitBreakerRule extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $defaultResponse;

    /**
     * @var int
     */
    public $errorThreshold;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $openTimeoutSeconds;

    /**
     * @var float
     */
    public $slowRatioThreshold;

    /**
     * @var string
     */
    public $switchStatus;

    /**
     * @var int
     */
    public $windowsInSeconds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'              => 'AppId',
        'defaultResponse'    => 'DefaultResponse',
        'errorThreshold'     => 'ErrorThreshold',
        'id'                 => 'Id',
        'model'              => 'Model',
        'openTimeoutSeconds' => 'OpenTimeoutSeconds',
        'slowRatioThreshold' => 'SlowRatioThreshold',
        'switchStatus'       => 'SwitchStatus',
        'windowsInSeconds'   => 'WindowsInSeconds',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->defaultResponse) {
            $res['DefaultResponse'] = $this->defaultResponse;
        }
        if (null !== $this->errorThreshold) {
            $res['ErrorThreshold'] = $this->errorThreshold;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->openTimeoutSeconds) {
            $res['OpenTimeoutSeconds'] = $this->openTimeoutSeconds;
        }
        if (null !== $this->slowRatioThreshold) {
            $res['SlowRatioThreshold'] = $this->slowRatioThreshold;
        }
        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }
        if (null !== $this->windowsInSeconds) {
            $res['WindowsInSeconds'] = $this->windowsInSeconds;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return circuitBreakerRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DefaultResponse'])) {
            $model->defaultResponse = $map['DefaultResponse'];
        }
        if (isset($map['ErrorThreshold'])) {
            $model->errorThreshold = $map['ErrorThreshold'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OpenTimeoutSeconds'])) {
            $model->openTimeoutSeconds = $map['OpenTimeoutSeconds'];
        }
        if (isset($map['SlowRatioThreshold'])) {
            $model->slowRatioThreshold = $map['SlowRatioThreshold'];
        }
        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }
        if (isset($map['WindowsInSeconds'])) {
            $model->windowsInSeconds = $map['WindowsInSeconds'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
