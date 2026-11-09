<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\RebuildSandboxResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $incarnation;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $sandboxId;
    protected $_name = [
        'incarnation' => 'incarnation',
        'operationId' => 'operationId',
        'sandboxId' => 'sandboxId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incarnation) {
            $res['incarnation'] = $this->incarnation;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->sandboxId) {
            $res['sandboxId'] = $this->sandboxId;
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
        if (isset($map['incarnation'])) {
            $model->incarnation = $map['incarnation'];
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['sandboxId'])) {
            $model->sandboxId = $map['sandboxId'];
        }

        return $model;
    }
}
