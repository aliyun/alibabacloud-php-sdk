<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAvailableConfigsResponseBody\configs;

class ListAvailableConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'configs' => 'configs',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['configs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['configs'] as $item1) {
                    $model->configs[$n1] = configs::fromMap($item1);
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
