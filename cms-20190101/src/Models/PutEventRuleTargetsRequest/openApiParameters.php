<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class openApiParameters extends Model
{
    /**
     * @description The ID of the recipient that receives alert notifications sent by an API callback.
     *
     * @example PutLogs
     *
     * @var string
     */
    public $action;

    /**
     * @description The error message.
     *
     * @example acs:log:cn-hangzhou::project/cms-log-mon***\/logstore/cxxxx***
     *
     * @var string
     */
    public $arn;

    /**
     * @description The region where Function Compute is deployed. Valid values of N: 1 to 5.
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @description The region where Message Service (MNS) is deployed. Valid values of N: 1 to 5.
     *
     * @example {"customField1":"value1","customField2":"$.name"}
     *
     * @var string
     */
    public $jsonParams;

    /**
     * @description The name of the Log Service project. Valid values of N: 1 to 5.
     *
     * @example log
     *
     * @var string
     */
    public $product;

    /**
     * @description The callback URL. Valid values of N: 1 to 5.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is returned if the specified alert contact groups in the request failed to be created or modified.
     *
     * @example MyRole
     *
     * @var string
     */
    public $role;

    /**
     * @description The name of the alert contact group.
     *
     * @example 2019-01-01
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'action'     => 'Action',
        'arn'        => 'Arn',
        'id'         => 'Id',
        'jsonParams' => 'JsonParams',
        'product'    => 'Product',
        'region'     => 'Region',
        'role'       => 'Role',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jsonParams) {
            $res['JsonParams'] = $this->jsonParams;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openApiParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JsonParams'])) {
            $model->jsonParams = $map['JsonParams'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
