<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;

class DescribeExpressConnectRouterAllowedPrefixHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $associationId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $ecrId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'associationId' => 'AssociationId',
        'clientToken'   => 'ClientToken',
        'dryRun'        => 'DryRun',
        'ecrId'         => 'EcrId',
        'instanceId'    => 'InstanceId',
        'instanceType'  => 'InstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
