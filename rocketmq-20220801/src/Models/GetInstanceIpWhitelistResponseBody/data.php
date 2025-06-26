<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipWhitelists;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'instanceId',
        'ipWhitelists' => 'ipWhitelists',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhitelists)) {
            Model::validateArray($this->ipWhitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->ipWhitelists) {
            if (\is_array($this->ipWhitelists)) {
                $res['ipWhitelists'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelists as $item1) {
                    $res['ipWhitelists'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = [];
                $n1 = 0;
                foreach ($map['ipWhitelists'] as $item1) {
                    $model->ipWhitelists[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
