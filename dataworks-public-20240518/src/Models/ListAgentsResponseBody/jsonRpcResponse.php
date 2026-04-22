<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentsResponseBody\jsonRpcResponse\result;

class jsonRpcResponse extends Model
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
     * @var result
     */
    public $result;
    protected $_name = [
        'id' => 'Id',
        'jsonrpc' => 'Jsonrpc',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jsonrpc) {
            $res['Jsonrpc'] = $this->jsonrpc;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Jsonrpc'])) {
            $model->jsonrpc = $map['Jsonrpc'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
