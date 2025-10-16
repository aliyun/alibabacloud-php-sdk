<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskSecurityGroupDetailResponseBody\riskSgDetail;

use AlibabaCloud\Dara\Model;

class ecsInfo extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $publicIp;
    protected $_name = [
        'ecsInstanceId' => 'EcsInstanceId',
        'ecsInstanceName' => 'EcsInstanceName',
        'privateIp' => 'PrivateIp',
        'publicIp' => 'PublicIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
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
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        return $model;
    }
}
