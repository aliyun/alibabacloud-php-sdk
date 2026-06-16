<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelService\V20220614\Models\GetUserResponseBody\apiKeys;

class GetUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $anthropicHost;

    /**
     * @var apiKeys[]
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dashscopeHost;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $innerToken;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'anthropicHost' => 'AnthropicHost',
        'apiKeys' => 'ApiKeys',
        'appId' => 'AppId',
        'code' => 'Code',
        'dashscopeHost' => 'DashscopeHost',
        'host' => 'Host',
        'innerToken' => 'InnerToken',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anthropicHost) {
            $res['AnthropicHost'] = $this->anthropicHost;
        }

        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['ApiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['ApiKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dashscopeHost) {
            $res['DashscopeHost'] = $this->dashscopeHost;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->innerToken) {
            $res['InnerToken'] = $this->innerToken;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AnthropicHost'])) {
            $model->anthropicHost = $map['AnthropicHost'];
        }

        if (isset($map['ApiKeys'])) {
            if (!empty($map['ApiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['ApiKeys'] as $item1) {
                    $model->apiKeys[$n1] = apiKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DashscopeHost'])) {
            $model->dashscopeHost = $map['DashscopeHost'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InnerToken'])) {
            $model->innerToken = $map['InnerToken'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
