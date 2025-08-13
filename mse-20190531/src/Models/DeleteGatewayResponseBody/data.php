<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\DeleteGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vpc;

    /**
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'primaryUser' => 'PrimaryUser',
        'region' => 'Region',
        'replica' => 'Replica',
        'securityGroup' => 'SecurityGroup',
        'spec' => 'Spec',
        'status' => 'Status',
        'vpc' => 'Vpc',
        'vswitch' => 'Vswitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }

        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }

        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
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
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }

        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
