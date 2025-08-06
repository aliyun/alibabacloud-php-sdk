<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentInstanceComponents;

use AlibabaCloud\Dara\Model;

class confluentInstanceComponentVO extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $deployModule;

    /**
     * @var string
     */
    public $pubEndpoint;

    /**
     * @var string
     */
    public $vpcEndpoint;
    protected $_name = [
        'componentType' => 'ComponentType',
        'deployModule' => 'DeployModule',
        'pubEndpoint' => 'PubEndpoint',
        'vpcEndpoint' => 'VpcEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->deployModule) {
            $res['DeployModule'] = $this->deployModule;
        }

        if (null !== $this->pubEndpoint) {
            $res['PubEndpoint'] = $this->pubEndpoint;
        }

        if (null !== $this->vpcEndpoint) {
            $res['VpcEndpoint'] = $this->vpcEndpoint;
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
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['DeployModule'])) {
            $model->deployModule = $map['DeployModule'];
        }

        if (isset($map['PubEndpoint'])) {
            $model->pubEndpoint = $map['PubEndpoint'];
        }

        if (isset($map['VpcEndpoint'])) {
            $model->vpcEndpoint = $map['VpcEndpoint'];
        }

        return $model;
    }
}
