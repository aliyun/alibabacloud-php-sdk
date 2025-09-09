<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateKyuubiTokenRequest\autoExpireConfiguration;

class UpdateKyuubiTokenRequest extends Model
{
    /**
     * @var autoExpireConfiguration
     */
    public $autoExpireConfiguration;

    /**
     * @var string[]
     */
    public $memberArns;

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
        'memberArns' => 'memberArns',
        'name' => 'name',
        'token' => 'token',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (null !== $this->autoExpireConfiguration) {
            $this->autoExpireConfiguration->validate();
        }
        if (\is_array($this->memberArns)) {
            Model::validateArray($this->memberArns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoExpireConfiguration) {
            $res['autoExpireConfiguration'] = null !== $this->autoExpireConfiguration ? $this->autoExpireConfiguration->toArray($noStream) : $this->autoExpireConfiguration;
        }

        if (null !== $this->memberArns) {
            if (\is_array($this->memberArns)) {
                $res['memberArns'] = [];
                $n1 = 0;
                foreach ($this->memberArns as $item1) {
                    $res['memberArns'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['memberArns'])) {
            if (!empty($map['memberArns'])) {
                $model->memberArns = [];
                $n1 = 0;
                foreach ($map['memberArns'] as $item1) {
                    $model->memberArns[$n1] = $item1;
                    ++$n1;
                }
            }
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
