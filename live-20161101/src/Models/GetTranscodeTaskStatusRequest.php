<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class GetTranscodeTaskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $transcodingTemplate;
    protected $_name = [
        'app' => 'App',
        'pushDomain' => 'PushDomain',
        'securityToken' => 'SecurityToken',
        'streamName' => 'StreamName',
        'transcodingTemplate' => 'TranscodingTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->transcodingTemplate) {
            $res['TranscodingTemplate'] = $this->transcodingTemplate;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['TranscodingTemplate'])) {
            $model->transcodingTemplate = $map['TranscodingTemplate'];
        }

        return $model;
    }
}
