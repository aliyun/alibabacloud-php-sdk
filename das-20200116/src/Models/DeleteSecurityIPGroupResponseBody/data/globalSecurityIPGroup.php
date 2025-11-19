<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DeleteSecurityIPGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class globalSecurityIPGroup extends Model
{
    /**
     * @var string
     */
    public $globalSecurityGroupId;
    protected $_name = [
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
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
        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }

        return $model;
    }
}
