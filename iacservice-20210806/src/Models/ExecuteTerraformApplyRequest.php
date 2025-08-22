<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ExecuteTerraformApplyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $stateId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'code' => 'code',
        'stateId' => 'stateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->stateId) {
            $res['stateId'] = $this->stateId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['stateId'])) {
            $model->stateId = $map['stateId'];
        }

        return $model;
    }
}
