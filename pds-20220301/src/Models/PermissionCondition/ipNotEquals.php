<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['client_ip'] = $this->clientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipNotEquals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_ip'])) {
            if (!empty($map['client_ip'])) {
                $model->clientIp = $map['client_ip'];
            }
        }

        return $model;
    }
}
