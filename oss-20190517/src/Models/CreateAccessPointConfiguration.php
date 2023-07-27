<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessPointConfiguration extends Model
{
    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @var string
     */
    public $networkOrigin;

    /**
     * @var AccessPointVpcConfiguration
     */
    public $vpcConfiguration;
    protected $_name = [
        'accessPointName'  => 'AccessPointName',
        'networkOrigin'    => 'NetworkOrigin',
        'vpcConfiguration' => 'VpcConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->networkOrigin) {
            $res['NetworkOrigin'] = $this->networkOrigin;
        }
        if (null !== $this->vpcConfiguration) {
            $res['VpcConfiguration'] = null !== $this->vpcConfiguration ? $this->vpcConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessPointConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['NetworkOrigin'])) {
            $model->networkOrigin = $map['NetworkOrigin'];
        }
        if (isset($map['VpcConfiguration'])) {
            $model->vpcConfiguration = AccessPointVpcConfiguration::fromMap($map['VpcConfiguration']);
        }

        return $model;
    }
}
