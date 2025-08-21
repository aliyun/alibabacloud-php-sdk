<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class SendRenderingInstanceCommandsResponseBody extends Model
{
    /**
     * @var string
     */
    public $cmdId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'cmdId' => 'CmdId',
        'requestId' => 'RequestId',
        'result' => 'Result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmdId) {
            $res['CmdId'] = $this->cmdId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['CmdId'])) {
            $model->cmdId = $map['CmdId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
