<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPrivateLinkSecurityGroupsResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'securityGroupId',
        'securityGroupName' => 'securityGroupName',
        'serviceManaged' => 'serviceManaged',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupName) {
            $res['securityGroupName'] = $this->securityGroupName;
        }

        if (null !== $this->serviceManaged) {
            $res['serviceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['securityGroupName'])) {
            $model->securityGroupName = $map['securityGroupName'];
        }

        if (isset($map['serviceManaged'])) {
            $model->serviceManaged = $map['serviceManaged'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
