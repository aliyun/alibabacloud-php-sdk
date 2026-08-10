<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class ResetApiKeyResponseBody extends Model
{
    /**
     * @var ApiKey
     */
    public $apiKey;

    /**
     * @var string
     */
    public $code;

    /**
     * @var IPConfig[]
     */
    public $ipBlacklist;

    /**
     * @var IPConfig[]
     */
    public $ipWhitelist;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'code' => 'code',
        'ipBlacklist' => 'ipBlacklist',
        'ipWhitelist' => 'ipWhitelist',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->apiKey) {
            $this->apiKey->validate();
        }
        if (\is_array($this->ipBlacklist)) {
            Model::validateArray($this->ipBlacklist);
        }
        if (\is_array($this->ipWhitelist)) {
            Model::validateArray($this->ipWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = null !== $this->apiKey ? $this->apiKey->toArray($noStream) : $this->apiKey;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->ipBlacklist) {
            if (\is_array($this->ipBlacklist)) {
                $res['ipBlacklist'] = [];
                $n1 = 0;
                foreach ($this->ipBlacklist as $item1) {
                    $res['ipBlacklist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipWhitelist) {
            if (\is_array($this->ipWhitelist)) {
                $res['ipWhitelist'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelist as $item1) {
                    $res['ipWhitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = ApiKey::fromMap($map['apiKey']);
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['ipBlacklist'])) {
            if (!empty($map['ipBlacklist'])) {
                $model->ipBlacklist = [];
                $n1 = 0;
                foreach ($map['ipBlacklist'] as $item1) {
                    $model->ipBlacklist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = [];
                $n1 = 0;
                foreach ($map['ipWhitelist'] as $item1) {
                    $model->ipWhitelist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
