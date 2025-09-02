<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody;

use AlibabaCloud\Dara\Model;

class associateVpcs extends Model
{
    /**
     * @var string
     */
    public $associateStatus;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associateStatus' => 'AssociateStatus',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateStatus) {
            $res['AssociateStatus'] = $this->associateStatus;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AssociateStatus'])) {
            $model->associateStatus = $map['AssociateStatus'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
