<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeTokenRequest\autoExpireConfiguration;

class CreateLivyComputeTokenRequest extends Model
{
    /**
     * @var autoExpireConfiguration
     */
    public $autoExpireConfiguration;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoExpireConfiguration' => 'autoExpireConfiguration',
        'name' => 'name',
        'token' => 'token',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (null !== $this->autoExpireConfiguration) {
            $this->autoExpireConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoExpireConfiguration) {
            $res['autoExpireConfiguration'] = null !== $this->autoExpireConfiguration ? $this->autoExpireConfiguration->toArray($noStream) : $this->autoExpireConfiguration;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['autoExpireConfiguration'])) {
            $model->autoExpireConfiguration = autoExpireConfiguration::fromMap($map['autoExpireConfiguration']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
