<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RerunNodeAIResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $rerunAccepted;

    /**
     * @var int
     */
    public $stateVersion;
    protected $_name = [
        'code' => 'code',
        'instanceId' => 'instanceId',
        'message' => 'message',
        'nodeId' => 'nodeId',
        'requestId' => 'requestId',
        'rerunAccepted' => 'rerunAccepted',
        'stateVersion' => 'stateVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rerunAccepted) {
            $res['rerunAccepted'] = $this->rerunAccepted;
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rerunAccepted'])) {
            $model->rerunAccepted = $map['rerunAccepted'];
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        return $model;
    }
}
