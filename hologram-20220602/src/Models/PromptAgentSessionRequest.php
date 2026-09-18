<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220602\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220602\Models\PromptAgentSessionRequest\params;

class PromptAgentSessionRequest extends Model
{
    /**
     * @var string
     */
    public $callerContext;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jsonrpc;

    /**
     * @var params
     */
    public $params;
    protected $_name = [
        'callerContext' => 'Caller-Context',
        'id' => 'Id',
        'jsonrpc' => 'Jsonrpc',
        'params' => 'Params',
    ];

    public function validate()
    {
        if (null !== $this->params) {
            $this->params->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerContext) {
            $res['Caller-Context'] = $this->callerContext;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jsonrpc) {
            $res['Jsonrpc'] = $this->jsonrpc;
        }

        if (null !== $this->params) {
            $res['Params'] = null !== $this->params ? $this->params->toArray($noStream) : $this->params;
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
        if (isset($map['Caller-Context'])) {
            $model->callerContext = $map['Caller-Context'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Jsonrpc'])) {
            $model->jsonrpc = $map['Jsonrpc'];
        }

        if (isset($map['Params'])) {
            $model->params = params::fromMap($map['Params']);
        }

        return $model;
    }
}
