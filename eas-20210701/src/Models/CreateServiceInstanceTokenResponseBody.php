<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceInstanceTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $streamlogUrl;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $workbenchUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamlogUrl' => 'StreamlogUrl',
        'token' => 'Token',
        'url' => 'Url',
        'workbenchUrl' => 'WorkbenchUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streamlogUrl) {
            $res['StreamlogUrl'] = $this->streamlogUrl;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->workbenchUrl) {
            $res['WorkbenchUrl'] = $this->workbenchUrl;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StreamlogUrl'])) {
            $model->streamlogUrl = $map['StreamlogUrl'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['WorkbenchUrl'])) {
            $model->workbenchUrl = $map['WorkbenchUrl'];
        }

        return $model;
    }
}
