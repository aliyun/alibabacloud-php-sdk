<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronBizUserTokenCreateCmd extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $permission;
    protected $_name = [
        'accountId' => 'accountId',
        'bizId' => 'bizId',
        'permission' => 'permission',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        return $model;
    }
}
