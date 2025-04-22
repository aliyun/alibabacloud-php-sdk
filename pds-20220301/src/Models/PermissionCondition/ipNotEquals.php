<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition;

use AlibabaCloud\Dara\Model;

class ipNotEquals extends Model
{
    /**
     * @var string[]
     */
    public $clientIp;
    protected $_name = [
        'clientIp' => 'client_ip',
    ];

    public function validate()
    {
        if (\is_array($this->clientIp)) {
            Model::validateArray($this->clientIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            if (\is_array($this->clientIp)) {
                $res['client_ip'] = [];
                $n1 = 0;
                foreach ($this->clientIp as $item1) {
                    $res['client_ip'][$n1++] = $item1;
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
        if (isset($map['client_ip'])) {
            if (!empty($map['client_ip'])) {
                $model->clientIp = [];
                $n1 = 0;
                foreach ($map['client_ip'] as $item1) {
                    $model->clientIp[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
