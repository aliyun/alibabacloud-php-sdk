<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListAuthorizedAgentsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $agentNames;

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
    protected $_name = [
        'agentNames' => 'agentNames',
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->agentNames)) {
            Model::validateArray($this->agentNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentNames) {
            if (\is_array($this->agentNames)) {
                $res['agentNames'] = [];
                $n1 = 0;
                foreach ($this->agentNames as $item1) {
                    $res['agentNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
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
        if (isset($map['agentNames'])) {
            if (!empty($map['agentNames'])) {
                $model->agentNames = [];
                $n1 = 0;
                foreach ($map['agentNames'] as $item1) {
                    $model->agentNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
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
