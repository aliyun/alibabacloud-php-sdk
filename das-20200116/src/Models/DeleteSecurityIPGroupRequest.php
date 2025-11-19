<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class DeleteSecurityIPGroupRequest extends Model
{
    /**
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionName' => 'RegionName',
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

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
