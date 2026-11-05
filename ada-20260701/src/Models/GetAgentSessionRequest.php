<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetAgentSessionRequest extends Model
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
     * @var mixed
     */
    public $params;
    protected $_name = [
        'id' => 'Id',
        'jsonrpc' => 'Jsonrpc',
        'params' => 'Params',
    ];

    public function validate()
    {
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

        if (null !== $this->params) {
            $res['Params'] = $this->params;
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

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
