<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DeleteGatewaySecurityGroupRuleRequest extends Model
{
    /**
     * @var bool
     */
    public $cascadingDelete;
    protected $_name = [
        'cascadingDelete' => 'cascadingDelete',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cascadingDelete) {
            $res['cascadingDelete'] = $this->cascadingDelete;
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
        if (isset($map['cascadingDelete'])) {
            $model->cascadingDelete = $map['cascadingDelete'];
        }

        return $model;
    }
}
