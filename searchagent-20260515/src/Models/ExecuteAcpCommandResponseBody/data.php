<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SearchAgent\V20260515\Models\ExecuteAcpCommandResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jsonrpc;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'id' => 'id',
        'jsonrpc' => 'jsonrpc',
        'requestId' => 'requestId',
        'result' => 'result',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jsonrpc) {
            $res['jsonrpc'] = $this->jsonrpc;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['result'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jsonrpc'])) {
            $model->jsonrpc = $map['jsonrpc'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                foreach ($map['result'] as $key1 => $value1) {
                    $model->result[$key1] = $value1;
                }
            }
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
