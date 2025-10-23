<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListResponseBody\configSets;

use AlibabaCloud\Dara\Model;

class ipPool extends Model
{
    /**
     * @var string
     */
    public $ipPoolId;

    /**
     * @var string
     */
    public $ipPoolName;
    protected $_name = [
        'ipPoolId' => 'IpPoolId',
        'ipPoolName' => 'IpPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPoolId) {
            $res['IpPoolId'] = $this->ipPoolId;
        }

        if (null !== $this->ipPoolName) {
            $res['IpPoolName'] = $this->ipPoolName;
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
        if (isset($map['IpPoolId'])) {
            $model->ipPoolId = $map['IpPoolId'];
        }

        if (isset($map['IpPoolName'])) {
            $model->ipPoolName = $map['IpPoolName'];
        }

        return $model;
    }
}
