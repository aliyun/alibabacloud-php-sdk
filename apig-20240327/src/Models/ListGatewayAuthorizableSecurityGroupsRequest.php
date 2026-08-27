<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayAuthorizableSecurityGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $csClusterId;
    protected $_name = [
        'csClusterId' => 'csClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csClusterId) {
            $res['csClusterId'] = $this->csClusterId;
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
        if (isset($map['csClusterId'])) {
            $model->csClusterId = $map['csClusterId'];
        }

        return $model;
    }
}
