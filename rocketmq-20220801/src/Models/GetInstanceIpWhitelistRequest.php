<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceIpWhitelistRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipWhitelists;
    protected $_name = [
        'ipWhitelists' => 'ipWhitelists',
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
        if (null !== $this->ipWhitelists) {
            if (\is_array($this->ipWhitelists)) {
                $res['ipWhitelists'] = [];
                $n1                  = 0;
                foreach ($this->ipWhitelists as $item1) {
                    $res['ipWhitelists'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = [];
                $n1                  = 0;
                foreach ($map['ipWhitelists'] as $item1) {
                    $model->ipWhitelists[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
