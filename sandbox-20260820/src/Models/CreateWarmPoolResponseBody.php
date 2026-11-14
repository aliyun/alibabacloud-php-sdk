<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class CreateWarmPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var PublicWarmPoolConfig
     */
    public $warmPool;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'warmPool' => 'warmPool',
    ];

    public function validate()
    {
        if (null !== $this->warmPool) {
            $this->warmPool->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->warmPool) {
            $res['warmPool'] = null !== $this->warmPool ? $this->warmPool->toArray($noStream) : $this->warmPool;
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

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['warmPool'])) {
            $model->warmPool = PublicWarmPoolConfig::fromMap($map['warmPool']);
        }

        return $model;
    }
}
